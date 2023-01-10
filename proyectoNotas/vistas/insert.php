<h1>Crear nueva nota</h1>
<main>

    <div class="formNota">

        <form action="index.php?action=insert" method="post">
            <p>
                <label for="title">Título</label>
                <input type="text" name="title">
            </p>
            <p>
                <label for="content">Contenido</label>
                <textarea name="content"></textarea>
            </p>
            <div>
                <input type="submit" value="Crear nueva nota" id="submit">
            </div>
        </form>

    </div>
    <div class="navegacion"><a href="index.php?action=list">Volver al listado</div>

</main>