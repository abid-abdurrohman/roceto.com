<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>New Message From Roceto Website</h2>

        <p>You have received a new message from the enquiries from on your website.</p>
        <p><b>Name : </b>{{ $nama }}</p>
        <p><b>E-mail Address : </b><a href="mailto:{{ $email }}">{{ $email }}</a></p>
        <p><b>Message : </b></p>
        <p>{{ $bodyMessage }}</p>
    </body>
</html>
