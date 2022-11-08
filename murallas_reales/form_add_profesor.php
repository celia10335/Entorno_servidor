<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar profesor</title>
</head>
<body>

<p>Introduzca los datos del alumno</p>
<form action="inserta_profesor.php" method="POST">
<p>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
</p>
<p>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos">
</p>
<p>
    <label for="telefono">Teléfono</label>
    <input type="text" name="telefono">
</p>
<p>
    <label for="email">E-mail</label>
    <input type="email" name="email">
</p>
<p>
    <input type="submit" value="Insertar">
</p>

</form>
    
</body>
</html>