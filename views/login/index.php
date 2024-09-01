<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
</head>

<body class="body_registro">
    <section class="container_registro">
        <h2>Inicia sesión</h2>
        <div class="img_container">
            <img src="<?php echo constant('URL'); ?>public/img/usuario.png" alt="Profile image" class="img_registro">
        </div>
        <p>Usa tu correo electronico</p>
        <form action="" class="form_registro">
            <input type="email" placeholder="Correo electronico" class="form_completeInput">
            <input type="password" placeholder="Contraseña" class="form_completeInput">
        </form>
        <p>Usa por lo menos una letra, un número y siete carácteres</p>
        <a class="btn_Registro" href="<?php echo constant('URL'); ?>perfil">Iniciar sesión</a>
    </section>
</body>


</html>