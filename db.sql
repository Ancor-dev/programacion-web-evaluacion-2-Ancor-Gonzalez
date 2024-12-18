CREATE DATABASE registro_evento_gonzalez;
USE registro_evento_gonzalez;

CREATE TABLE asistentes (
    
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(30) NOT NULL,
  rut VARCHAR(20) NOT NULL,
  email VARCHAR(100),
  telefono VARCHAR(20),
  imagen TEXT,
  codigo_qr TEXT,
  fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- Datos de prueba

INSERT INTO asistentes (nombre,rut,email,telefono,imagen,codigo_qr)
VALUES ('Juan Pérez', '12345678-9', 'juan.perez@example.com', '987654321', 'http://ejemplo.com/imagen1.jpg', 'http://ejemplo.com/qr1'),