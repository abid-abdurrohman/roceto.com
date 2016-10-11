<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>

        <p>Hi {{ $name }},</p>
        <p>Your user account with the e-mail address <a href="mailto:{{ $email }}">{{ $email }}</a> has been created.</p>
        <p>Please follow the link below to activate your account.</p>
          <a href="{{ URL::to('user/activation/' . $token) }}">Click Here</a>

        <p>You will be able to change your settings your account once your account is activated. </p><br>

        <p>If you have not requested the creation of a Roceto account or if you think this is an unauthorized use of your
          e-mail address, please forward this e-mail to <a href="mailto:info@roceto.com">info@roceto.com</a></p>
    </body>
</html>
