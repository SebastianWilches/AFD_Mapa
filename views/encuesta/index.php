<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
</head>

<body class="body_encuesta">
    <section class="container_registro">
        <h2>Encuesta</h2>
        <div class="img_container">
            <img src="<?php echo constant('URL'); ?>public/img/encuesta.png" alt="Info image" class="img_registro">
        </div>

        <article class="encuesta_form">
            <p>PREGUNTAS PARA LLENAR LA TABLA DE CONTROL FINANCIERO</p>
            <label>1. ¿Cuánto gana?</label>
            <select>
                <option>Opción 1</option>
                <option>Opción 2</option>
            </select>
            
            <label>2. ¿Cuánto tiene ahorrado actualmente?</label>
            <select>
                <option>Opción 1</option>
                <option>Opción 2</option>
            </select>

            <label>3. ¿Cuánto son sus gastos?</label>
            <select>
                <option>Opción 1</option>
                <option>Opción 2</option>
            </select>

            <label>4. ¿Cual es su meta de ahorro?</label>
            <select>
                <option>Opción 1</option>
                <option>Opción 2</option>
            </select>
            <hr>
            <p>PREGUNTAS PARA LLENAR LA TABLA DE ENCUESTA</p>
            

            <label>2. ¿Usted hace un presupuesto?</label>
            <select>
                <option>Opción 1</option>
                <option>Opción 2</option>
            </select>

            <label>4. ¿Tiene gastos innecesarios?</label>
            <select>
                <option>Opción 1</option>
                <option>Opción 2</option>
            </select>

            <label>5. ¿Tiene deudas con el banco?</label>
            <select>
                <option>Opción 1</option>
                <option>Opción 2</option>
            </select>

            <label>6. ¿Tiene en cuenta los gastos fijos en su presupuesto?</label>
            <select>
                <option>Opción 1</option>
                <option>Opción 2</option>
            </select>

            <label>11. Cuando hace compras grandes, ¿Cuál es su método de pago?</label>
            <select>
                <option>Opción 1</option>
                <option>Opción 2</option>
            </select>
        </article>


        <p class="text_alert">¡Es obligatorio completar todos los campos!</p>
        <!-- <p class="text_info">*A continuación, deberás realizar una encuesta para que empecemos a llevar tus finanzas</p> -->
        <a class="btn_Registro" href="<?php echo constant('URL'); ?>">Página principal</a>
    </section>
</body>


</html>