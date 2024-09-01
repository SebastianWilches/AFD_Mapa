<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
</head>

<body>

    <nav class="navBar_Inicio">
        <a href="<?php echo constant('URL'); ?>">
            <h1>AFD</h1>
        </a>
        <a href="<?php echo constant('URL'); ?>estadisticas">
            <h1>Estadisticas</h1>
        </a>
        <a href="<?php echo constant('URL'); ?>">
            <h1>Cerrar sesión</h1>
        </a>
    </nav>

    <div class="container_perfil">
        <section class="container_header_perfil">
            <div class="img_container">
                <img src="<?php echo constant('URL'); ?>public/img/profile.png" alt="Info image" class="img_perfil">
            </div>
            <div class="change_password">
                <label>Contraseña</label>
                <input type="password" placeholder="Contraseña">
                <a href="">Modificar contraseña</a>
            </div>
        </section>

        <section class=>
            <form action="" class="form-perfil">
                <div class="item_perfil">
                    <label>Nombre(s)</label>
                    <input type="text" placeholder="Respuesta predeterminada" class="">
                </div>

                <div class="item_perfil">
                    <label>Apellidos(s)</label>
                    <input type="text" placeholder="Respuesta predeterminada" class="">
                </div>

                <div class="item_perfil">
                    <label>Edad</label>
                    <input type="text" placeholder="Respuesta predeterminada" class="">
                </div>

                <div class="item_perfil">
                    <label>Tipo de documento</label>
                    <input type="text" placeholder="Respuesta predeterminada" class="">
                </div>

                <div class="item_perfil">
                    <label>Número de documento</label>
                    <input type="text" placeholder="Respuesta predeterminada" class="">
                </div>

                <div class="item_perfil">
                    <label>Teléfono</label>
                    <input type="text" placeholder="Respuesta predeterminada" class="">
                </div>

                <div class="item_perfil">
                    <label>Estado civil</label>
                    <input type="text" placeholder="Respuesta predeterminada" class="">
                </div>

                <div class="item_perfil">
                    <label>Estado laboral</label>
                    <input type="text" placeholder="Respuesta predeterminada" class="">
                </div>

            </form>

        </section>
    </div>
</body>

</html>