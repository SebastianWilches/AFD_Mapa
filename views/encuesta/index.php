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

        <form action="<?php echo constant('URL'); ?>encuesta/enviarEncuesta" method="POST">
            <!-- PREGUNTAS PARA LLENAR LA TABLA DE CONTROL FINANCIERO -->
            <article class="encuesta_form">
                <p>PREGUNTAS PARA LLENAR LA TABLA DE CONTROL FINANCIERO</p>
                <label>1. ¿Cuánto gana?</label>
                <input type="number" name="ganancias" required>
                
                <label>2. ¿Cuánto tiene ahorrado actualmente?</label>
                <input type="number" name="ahorro_actual" required>

                <label>3. ¿Cuánto son sus gastos?</label>
                <input type="number" name="gastos" required>

                <label>4. ¿Cuál es su meta de ahorro?</label>
                <input type="number" name="meta" required>

                <hr>

                <!-- PREGUNTAS PARA LLENAR LA TABLA DE ENCUESTA_FINANCIERA -->
                <p>PREGUNTAS PARA LLENAR LA TABLA DE ENCUESTA FINANCIERA</p>
                <label>1. ¿Usted hace un presupuesto?</label>
                <select name="tiene_presupuesto">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>

                <label>2. ¿Tiene gastos innecesarios?</label>
                <select name="tiene_gastos_innecesarios">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>

                <label>3. ¿Tiene deudas con el banco?</label>
                <select name="tiene_deudas">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>

                <label>4. ¿Tiene en cuenta los gastos fijos en su presupuesto?</label>
                <select name="tiene_gastos_fijos">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>

                <label>5. Cuando hace compras grandes, ¿Cuál es su método de pago?</label>
                <input type="text" name="metodo_pago" required>
            </article>

            <p class="text_alert">¡Es obligatorio completar todos los campos!</p>
            <input type="submit" value="Enviar Encuesta" class="btn_Registro">
        </form>
    </section>
</body>

</html>
