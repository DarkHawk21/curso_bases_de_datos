-- CRUD
-- R - READ
SELECT <Campos a obtener> FROM <Nombre de la tabla> WHERE <Reglas de comparación> <Opcional: ORDER BY <Nombre del campo> <ASC o DESC>>;

-- C - CREATE 
INSERT INTO <Nombre de la tabla> (<Nombres de las columnas>) VALUES (<Valores para las columnas>);
INSERT INTO <Nombre de la tabla> VALUES (<Valores para todas las columnas>);

-- U - UPDATE 
UPDATE <Nombre de la tabla> SET (<`Nombre del campo`> = <Valor del campo>) WHERE <Reglas de condición>;

-- D - DELETE 
DELETE FROM <Nombre de la tabla> WHERE <Reglas de condición>;