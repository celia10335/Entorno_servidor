<p>Crear nueva nota</p>
<form action="../modelo/notas.php" method="post">
    <p>
        <label for="title">Título</label>
        <input type="text" name="title">
    </p>
    <p>
        <label for="content">Contenido</label>
        <textarea name="content"></textarea>
    </p>
    <p>
        <input type="submit" value="Añadir">
    </p>
</form>