<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
</head>

<body class="body_registro">
    <section class="container_registro">
        <h2>Crea una cuenta</h2>
        <div class="img_container">
            <img src="<?php echo constant('URL'); ?>public/img/usuario.png" alt="Profile image" class="img_registro">
        </div>
        <p>Usa tu correo electronico</p>
        <form action="<?php echo constant('URL'); ?>/registro/POSTRegisterUser" class="form_registro" method="POST">
            <input name='iduser' type="text" placeholder="ID USUARIO" class="" require>
            <input name='nombre' type="text" placeholder="Nombre (s)" class="form_name" require>
            <input name='apellido' type="text" placeholder="Apellido (s)" class="form_lastname" require>
            <input name='email' type="email" placeholder="Correo electronico" class="form_completeInput" require>
            <input name='password' type="password" placeholder="Contraseña" class="form_completeInput" require>
            <p>Usa por lo menos una letra, un número y siete carácteres</p>
            <input type='submit' class="btn_Registro" value='Registrarte'>
        </form>

        <p><?php echo $this->mensaje ?></p>
        <!-- <a class="btn_Registro" href="datosPersonales">Registrarte</a> -->
    </section>
</body>


</html>