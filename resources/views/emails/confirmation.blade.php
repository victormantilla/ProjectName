<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Inscripción</title>
</head>
<body>
<h1>Gracias por registrarte!</h1>

<h1>Hello {{ $name }}</h1>
<p>
    Nosotros necesitamos que  <a href='{{ url("register/confirm/{$user->token}") }}'>confirme su cuenta de email</a> !
</p>
</body>
</html>