<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
</head>
<body>
    <nav class="navBar_Inicio">
        <a href="<?php echo constant('URL'); ?>">
            <h1>AFD</h1>
        </a>
        <a href="<?php echo constant('URL'); ?>perfil.html">
            <h1>Perfil</h1>
        </a>
        <a href="<?php echo constant('URL'); ?>">
            <h1>Cerrar sesión</h1>
        </a>
    </nav>

    <h2 class="title_stats">¡Bienvenido, (NOMBRE)!</h2>
    <section class="collection_stats">
        <article class="card_stats">
            <p class="card_title">Ganancias</p>
            <p class="card_value">$1.000.000</p>
        </article>
        <article class="card_stats">
            <p class="card_title">Ahorro actual</p>
            <p class="card_value">$1.000.000</p>
        </article>
        <article class="card_stats">
            <p class="card_title">Gastos</p>
            <p class="card_value">$1.000.000</p>
        </article>
        <article class="card_stats">
            <p class="card_title">Falta dinero para tu meta</p>
            <p class="card_value">$1.000.000</p>
        </article>
    </section>
    
    <article class="card_stats">
        <h1 class="card_title_summary">Tu meta establecida</h1>
        <div class="img_container">
            <img src="<?php echo constant('URL'); ?>public/img/statsBank.jpg" alt="Info image" class="img_registro">
        </div>
        <p class="card_value font_size">$1.000.000</p>
    </article>
</body>
</html>