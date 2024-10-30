<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
</head>
<body>
    <nav class="navBar_Inicio">
        <a href="<?php echo constant('URL'); ?>">
            <h1>AFD</h1>
        </a>
        <a href="<?php echo constant('URL'); ?>perfil/getUserInfo?id_user=<?php echo $_SESSION['id_user'] ?? ''; ?>">
    <h1>Perfil</h1>
</a>

        <a href="<?php echo constant('URL'); ?>">
            <h1>Cerrar sesión</h1>
        </a>
    </nav>

    <h2 class="title_stats">¡Bienvenido, <?php echo isset($this->estadisticas['nombre']) ? htmlspecialchars($this->estadisticas['nombre']) : 'Usuario'; ?>!</h2>

    <section class="collection_stats">
        <article class="card_stats">
            <p class="card_title">Ganancias</p>
            <p class="card_value">$<?php echo isset($this->estadisticas['ganancias']) ? number_format($this->estadisticas['ganancias']) : '0'; ?></p>
        </article>
        <article class="card_stats">
            <p class="card_title">Ahorro actual</p>
            <p class="card_value">$<?php echo isset($this->estadisticas['ahorro_actual']) ? number_format($this->estadisticas['ahorro_actual']) : '0'; ?></p>
        </article>
        <article class="card_stats">
            <p class="card_title">Gastos</p>
            <p class="card_value">$<?php echo isset($this->estadisticas['gastos']) ? number_format($this->estadisticas['gastos']) : '0'; ?></p>
        </article>
        <article class="card_stats">
            <p class="card_title">Falta dinero para tu meta</p>
            <?php
                // Calculamos cuánto falta para alcanzar la meta
                $falta_dinero = isset($this->estadisticas['meta']) && isset($this->estadisticas['ahorro_actual']) 
                                ? max(0, $this->estadisticas['meta'] - $this->estadisticas['ahorro_actual']) 
                                : 0;
            ?>
            <p class="card_value">$<?php echo number_format($falta_dinero); ?></p>
        </article>
    </section>
    
    <article class="card_stats">
        <h1 class="card_title_summary">Tu meta establecida</h1>
        <div class="img_container">
            <img src="<?php echo constant('URL'); ?>public/img/statsBank.jpg" alt="Info image" class="img_registro">
        </div>
        <p class="card_value font_size">$<?php echo isset($this->estadisticas['meta']) ? number_format($this->estadisticas['meta']) : '0'; ?></p>
    </article>
</body>
</html>
