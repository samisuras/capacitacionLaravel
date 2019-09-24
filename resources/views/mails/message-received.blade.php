<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de: {{$msg['name']}} - {{$msg['email']}}</p>
    <p>
        <strong>
            Asunto: {{$msg['subject']}}
        </strong>
    </p>
    <p>
        Mensaje: {{$msg['content']}}
    </p>
</body>
</html>
