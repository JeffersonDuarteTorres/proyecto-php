<div class="container-fluid bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <ul class="nav nav-justified py-2 nav-pills">
            <?php if (isset($_GET["pagina"])): ?>

                <?php if ($_GET["pagina"] == "registro"): ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                    </li>

                <?php endif ?>

                
                <?php if ($_GET["pagina"] == "ingreso"): ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
                    </li>

                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>

                <?php endif ?>


                <?php if ($_GET["pagina"] == "inicio"): ?>

                <li class="nav-item">
                    <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                </li>

                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>

                <?php endif ?>


                <?php if ($_GET["pagina"] == "inventario"): ?>

                <li class="nav-item">
                    <a href="index.php?pagina=inventario" class="nav-link active">Inventario</a>
                </li>

                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=inventario">Inventario</a>
                </li>

                <?php endif ?>


                <?php if ($_GET["pagina"] == "salir"): ?>

                <li class="nav-item">
                    <a href="index.php?pagina=salir" class="nav-link active">Salir</a>
                </li>

                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>

                <?php endif ?>

            <?php else: ?>
            </ul>

            <ul class="nav nav-justified py-2 nav-pills">
                <li class="nav-item">
                    <a href="index.php?pagina=registro" class="nav-link">Registro</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=inventario" class="nav-link">Inventario</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                </li>
            </ul>
            <?php endif ?>
        </div>