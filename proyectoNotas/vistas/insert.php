<h1>Añadir nueva nota</h1>
<main>

    <div class=nuevaNota>

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
                <input type="submit" value="Añadir" id="submit">
            </div>
        </form>

    </div>
    <div class="navegacion"><a href="index.php?action=list">Volver al listado</div>

</main>