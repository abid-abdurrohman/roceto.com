<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Registration completed</h2>

        <p>Hi {{ $name }},</p>
        <p>Congratulations, <b>your Roceto account has been created successfully </b>and we are pleased to welcome you to our
          community. We recommend you keep this e-mail to store your credentials.</p>
        <p>Your credentials:</p>
        <ul>
          <li> Username : {{ $name }} </li>
          <li> Email Address : <a href="mailto:{{ $email }}">{{ $email }}</a> </li>
        </ul>

        <p>You can now sign in to Roceto with <b>your username and password. </b></p>

        <p>Thank you for your trust in our solutions, <br>
          Roceto Team</p>
    </body>
</html>
