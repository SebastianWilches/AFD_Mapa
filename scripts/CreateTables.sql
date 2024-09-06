-- Crear la tabla users
CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    tipo_documento VARCHAR(50) NOT NULL,
    numero_documento BIGINT NOT NULL UNIQUE,
    telefono BIGINT NOT NULL,
    estado_civil VARCHAR(50),
    estado_laboral VARCHAR(50),
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Crear la tabla control_financiero
CREATE TABLE control_financiero (
    id_control_financiero INT AUTO_INCREMENT PRIMARY KEY,
    ganancias DECIMAL(10, 2) NOT NULL,
    ahorro_actual DECIMAL(10, 2) NOT NULL,
    gastos DECIMAL(10, 2) NOT NULL,
    meta DECIMAL(10, 2) NOT NULL,
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);

-- Crear la tabla encuesta_financiera
CREATE TABLE encuesta_financiera (
    id_encuesta_financiera INT AUTO_INCREMENT PRIMARY KEY,
    tiene_presupuesto BOOLEAN NOT NULL,
    tiene_gastos_innecesarios BOOLEAN NOT NULL,
    tiene_deudas BOOLEAN NOT NULL,
    tiene_gastos_fijos BOOLEAN NOT NULL,
    metodo_pago VARCHAR(100),
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);