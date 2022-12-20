<p>Editar nota</p>
<form action="index.php?action=edit" method="get">
    <p>
        <label for="title">Título</label>
        <input type="text" name="title" value="<?php echo $datos[0]->titulo ?>">
    </p>
    <p>
        <label for="content">Contenido</label>
        <textarea name="content"><?php echo $datos[0]->contenido ?></textarea>
    </p>
    <p>
        <input type="submit" value="Añadir">
    </p>
</form>
