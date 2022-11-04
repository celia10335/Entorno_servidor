<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario entrada datos</title>
</head>
<body>

<p>Introduzca los datos del grupo</p>
<form action="inserta_grupo.php" method="POST">
<p>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
</p>
<p>
    <label for="curso">Curso</label>
    <input type="text" name="curso">
</p>
<p>
    <input type="submit" value="Insertar">
</p>

</form>
    
</body>
</html>