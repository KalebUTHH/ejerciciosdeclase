<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>
</head>
<body>
<form action="welcome.php" method="POST">
     Nombre: <input type="text" name="name" pattern="[a-z|A-Z|á|é|í|ó|ú|Á|É|Í|Ó|Ú|ñ|Ñ|ü|Ü| ]"><br>
     edad:   <input type="text" name="edad" pattern="[1-9]{1,99}"><br>
    <input type="submit">
</form>
</body>
</html>