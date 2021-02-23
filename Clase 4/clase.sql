-- Este es un comentario de una linea
/*
    Este es un comentario multilinea
    Esta es otra linea de comentario
*/

-- Crear Bases de datos
• CREATE DATABASE IF NOT EXISTS <Nombre de la base de datos>;

-- Usar la base de datos en donde vamos a trabajar
• USE <Nombre de la base de datos>;

-- Crear tablas en nuestra base de datos
• CREATE TABLE IF NOT EXISTS <Nombre de nuestra tabla> (
    <Nombre de la columna> <Tipo de dato> <Restricciones o reglas>,
    <Nombre de la columna> <Tipo de dato> <Restricciones o reglas>,
);

-- Modificar una tabla
-- Modificar tipo de campo
• ALTER TABLE <Nombre de la tabla> ALTER <Nombre del campo> <Tipo del campo>;
-- Modificar restricciones
• ALTER TABLE <Nombre de la tabla> SET DEFAULT <Dato por defecto>;
• ALTER TABLE <Nombre de la tabla> MODIFY <Nombre del campo> <Tipo del campo> <Restricción>;
-- Modificar para eliminar
• ALTER TABLE <Nombre de la tabla> DROP <Nombre del campo>;
-- Modificar para añadir
• ALTER TABLE <Nombre de la tabla> ADD <Nombre del campo> <Tipo del campo>;

-- Eliminar Basese de datos
• DROP DATABASE <Nombre de la base de datos que queremos eliminar>;

-- Eliminar Tablas
• DROP TABLE <Nombre de la tabla a eliminar>;

-- Constraints
-- Crear
• CREATE TABLE IF NOT EXISTS <Nombre de nuestra tabla> (
    <Nombre de la columna> <Tipo de dato> <Restricciones o reglas>,
    <Nombre de la columna> <Tipo de dato> <Restricciones o reglas>,
    CONSTRAINT UC_<Nombre de la regla> UNIQUE (<Nombre del campo>)
);

-- Editar
• ALTER TABLE <Nombre de la tabla> MODIFY CONSTRAINT UC_<Nombre de la regla> UNIQUE (<Nombre del campo a sustituir>, <Nombre del campo que sustituye>);

-- Eliminar
• ALTER TABLE <Nombre de la tabla> DROP CONSTRAINT UC_<Nombre de la regla>; -- SQL Server
• ALTER TABLE <Nombre de la tabla> DROP INDEX UC_<Nombre de la regla>; -- MySQL