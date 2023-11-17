-- Apaga o BD se ele existir
DROP DATABASE IF EXISTS ClinicaVeterinaria;

-- Cria o BD
CREATE DATABASE ClinicaVeterinaria;

-- Cria o usuário
CREATE USER 'senai'@'localhost'
IDENTIFIED BY '1234';

-- Dá privilégios ilimitados para o usuário
GRANT ALL PRIVILEGES
ON clinicaveterinaria.*
TO 'senai'@'localhost';

 