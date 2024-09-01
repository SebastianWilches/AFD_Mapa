<?php
// El proposito de esta clase es crear el comportamiento común que va a heredar todas las clases respectivas a las vistas
class View{

    function __construct(){
        // echo "<p>Vista base</p>";
    }

    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
}

?>