{include file="Cabeceras/header.tpl"}

    <section>
        <div id="CONTENIDO">
            <form method="post" action="usuarios.php">
                <div class="form-group">
                    <label for="User">User</label>
                    <input type="text" name="User" class="form-control" placeholder="Ingrese Usuario" required>
                </div>
                <div class="form-group">
                    <label for="Password">Pass</label>
                    <input type="password" class="form-control" name="Password" placeholder="Ingrese PIN" required>
                </div>
                <div class="form-group" align="center">
                    <input type="submit" value="Ingreso" class="btn btn-primary btn-lg" required>
                </div>

            </form>
        </div>
    </section>

    {include file="Cabeceras/footer.tpl"}
