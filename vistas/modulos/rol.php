<div class="container-fluid">
		
		<div class="container py-5">

            <div class="d-flex justify-content-center text-center py-3">

                <form class="p-5 bg-light" method="post">
            
                    <div class="form-group">
                        <label for="producto">Nombre del Nuevo Rol:</label>
            
                        <div class="input-group">
                            
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <br><i class="fas fa-user"></i><br>
                                </span>
                            </div>
                            <br><input type="text" class="form-control" id="rol" name="nombreRol">
            
                        </div>
                        
                    </div>

                        <?php

                        /*=============================================
                        FORMA EN QUE SE INSTA­NCIA LA CLASE DE UN MÉTODO ESTÁTICO
                        =============================================*/

                        $roles = ControladorRol::ctrRol();

                        if ($roles === 'ok') {
                            // Aquí sí entra cuando el método devuelve "ok"
                            echo '<script>
                                if (window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                }
                            </script>';
                            echo '<div class="alert alert-success">Nuevo rol agregado</div>';
                        }

                        ?>
                                
                    <br><button type="submit" class="btn btn-primary">Guardar</button>
            
                </form>
            
            </div>

        </div>

    </div>