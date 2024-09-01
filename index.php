<?php
// Archivos que crean el comportamiento común
require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/model.php';
require_once 'libs/database.php';

require_once 'libs/app.php';

// Configuracion de variables constantes
require_once 'config/config.php';

// Toda la APP estará centralizada aquí
$app = new App();

?>