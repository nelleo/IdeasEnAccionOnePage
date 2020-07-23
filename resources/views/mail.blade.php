<!doctype html>
<html lang="es" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Nuevo Mensaje</title>
</head>
<body>
    <p>Hola! Se ha reportado una nueva consulta</p>
    <p>Estos son los datos del usuario:</p>
    <ul>
        <li>Nombre: {{ $datos->nombre }}</li>
        <li>Email: {{ $datos->email }}</li>
        <li>Mensaje: {{ $datos->mensaje }}</li>
    </ul>
</body>
</html>