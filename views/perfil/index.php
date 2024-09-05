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

            <!-- Formulario para cambiar la contraseña -->
            <div class="change_password">
                <form action="<?php echo constant('URL'); ?>perfil/updatePassword" method="POST">
                    <!-- <label>Contraseña actual</label>
                    <input type="password" name="current_password" placeholder="Contraseña actual" required> -->

                    <label>Nueva contraseña</label>
                    <input type="password" name="new_password" placeholder="Nueva contraseña" required>

                    <!-- Enviamos el id_user como hidden input -->
                    <input type="hidden" name="id_user" value="<?php echo isset($_GET['id_user']) ? $_GET['id_user'] : ''; ?>">

                    <input type="submit" value="Actualizar contraseña">
                </form>
            </div>
        </section>

        <section class="form-perfil">
            <form action="" method="POST">
                <!-- Información del perfil -->
                <div class="item_perfil">
                    <label>Nombre(s)</label>
                    <input value="<?php echo isset($this->userInfo['nombre']) ? htmlspecialchars($this->userInfo['nombre']) : ''; ?>" disabled type="text">
                </div>

                <div class="item_perfil">
                    <label>Apellidos(s)</label>
                    <input value="<?php echo isset($this->userInfo['apellido']) ? htmlspecialchars($this->userInfo['apellido']) : ''; ?>" disabled type="text">
                </div>

                <div class="item_perfil">
                    <label>Edad</label>
                    <input value="<?php echo isset($this->userInfo['edad']) ? htmlspecialchars($this->userInfo['edad']) : ''; ?>" disabled type="text">
                </div>

                <div class="item_perfil">
                    <label>Tipo de documento</label>
                    <input value="<?php echo isset($this->userInfo['tipo_documento']) ? htmlspecialchars($this->userInfo['tipo_documento']) : ''; ?>" disabled type="text">
                </div>

                <div class="item_perfil">
                    <label>Número de documento</label>
                    <input value="<?php echo isset($this->userInfo['numero_documento']) ? htmlspecialchars($this->userInfo['numero_documento']) : ''; ?>" disabled type="text">
                </div>

                <div class="item_perfil">
                    <label>Teléfono</label>
                    <input value="<?php echo isset($this->userInfo['telefono']) ? htmlspecialchars($this->userInfo['telefono']) : ''; ?>" disabled type="text">
                </div>

                <div class="item_perfil">
                    <label>Estado civil</label>
                    <input value="<?php echo isset($this->userInfo['estado_civil']) ? htmlspecialchars($this->userInfo['estado_civil']) : ''; ?>" disabled type="text">
                </div>

                <div class="item_perfil">
                    <label>Estado laboral</label>
                    <input value="<?php echo isset($this->userInfo['estado_laboral']) ? htmlspecialchars($this->userInfo['estado_laboral']) : ''; ?>" disabled type="text">
                </div>
            </form>
        </section>
    </div>

    <!-- Mostrar mensaje si existe -->
    <p><?php echo $this->mensaje; ?></p>
</body>

</html>
