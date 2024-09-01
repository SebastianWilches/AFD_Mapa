<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
</head>

<body class="body_registro">
    <section class="container_registro">
        <h2>Datos Personales</h2>
        <div class="img_container">
            <img src="<?php echo constant('URL'); ?>public/img/informacion.png" alt="Info image" class="img_registro">
        </div>

        
        <form action="" class="form_login">
            <input type="number" placeholder="Edad" class="">
            <input type="number" placeholder="Teléfono" class="">
            <input type="text" placeholder="Tipo de documento" class="form_completeInput">
            <input type="number" placeholder="Número de documento" class="form_completeInput">
            <input type="text" placeholder="Estado civil" class="form_completeInput">
            <input type="text" placeholder="Estado laboral" class="form_completeInput">
        </form>
        <p class="text_alert">¡Es obligatorio completar todos los campos!</p>
        <p class="text_info">*A continuación, deberás realizar una encuesta para que empecemos a llevar tus finanzas</p>
        <a class="btn_Registro" href="<?php echo constant('URL'); ?>encuesta">Enviar</a>
    </section>
</body>


</html>