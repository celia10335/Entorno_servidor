<p>Editar nota</p>
<form action="index.php?action=actualizar" method="post">
    <p>
        <label for="title">Título</label>
        <input type="text" name="title" value="<?php echo $datos[0]->titulo ?>">
    </p>
    <p>
        <label for="content">Contenido</label>
        <textarea name="content"><?php echo $datos[0]->contenido ?></textarea>
    </p>
    <input type="hidden" name="id" value="<?php echo $datos[0]->id ?>">
    <p>
        <input type="submit" value="Actualizar">
    </p>

</form>