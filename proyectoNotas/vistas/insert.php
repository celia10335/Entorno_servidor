<p>Crear nueva nota</p>
<form action="index.php?action=insert" method="post">
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

<div class="navegacion"><a href="index.php?action=list">Ver listado de notas</div>