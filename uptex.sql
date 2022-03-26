CREATE TABLE `clientes2` (
`id_cliente` int(10) NOT NULL AUTO_INCREMENT,
`nombre` varchar(60) NOT NULL,
`usuario` varchar(20) NOT NULL,
`correo` varchar(30) NOT NULL,
`contraseña` varchar(50) NOT NULL,
`nivel` INT(1) NOT NULL,
`statu` INT(1) NOT NULL,
`tarjeta` VARCHAR(12) NULL,
PRIMARY KEY (id_cliente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

USE uptex;

