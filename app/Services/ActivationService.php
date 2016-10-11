<?php

namespace App\Services;

use App\Model\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;

class ActivationService
{

    protected $mailer;

    protected $activationRepo;

    protected $resendAfter = 24;

    public function __construct(Mailer $mailer, ActivationRepository $activationRepo)
    {
        $this->mailer = $mailer;
        $this->activationRepo = $activationRepo;
    }

    public function sendActivationMail($user)
    {

        if ($user->activated || !$this->shouldSend($user)) {
            return;
        }

        $token = $this->activationRepo->createActivation($user);

        Mail::send('emails.verify',
            array (
                'token' => $token,
                'name' => $user->name,
                'email' => $user->email,
            ), function($message) use($user){
                $message->to($user->email)->subject('Receto - Verify your email address!');
            }
        );

    }

    public function activateUser($token)
    {
        $activation = $this->activationRepo->getActivationByToken($token);

        if ($activation === null) {
            return null;
        }

        $user = User::find($activation->user_id);

        $user->activated = true;

        $user->save();

        $this->activationRepo->deleteActivation($token);

        return $user;

    }

    private function shouldSend($user)
    {
        $activation = $this->activationRepo->getActivation($user);
        return $activation === null || strtotime($activation->created_at) + 60 * 60 * $this->resendAfter < time();
    }

    public function sendWelcomeMail($user)
    {
        Mail::send('emails.welcome',
            array (
                'name' => $user->name,
                'email' => $user->email,
            ), function($message) use($user){
                $message->to($user->email)->subject('Roceto - Registration completed!');
            }
        );

    }

}
