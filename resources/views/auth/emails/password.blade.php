<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Password Reset</h2>

        <p>We received a request to reset your password to your Roceto account. <br>We're here to Help!</p>
        <p>Simply click on the button to set a new password:</p>

        <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">
          <p>Set a new password</p>
        </a>

        <p>If you didn't ask to change your password, don't worry! Your password is still safe and you can delete this email</p>
        <br>

        <p>Cheers,</p>
        <p><b>Roceto</b></p>
    </body>
</html>
