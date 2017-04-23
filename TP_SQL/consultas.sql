-- 1
    SELECT * FROM productos ORDER BY pNombre;
/*
 +---------+-------------+--------+---------+
 | pNumero | pNombre     | Precio | Tamaño  | 
 +---------+-------------+--------+---------+
 | 1       | Caramelos   | 1.5    | Chico   | 
 | 2       | Cigarrillos | 45.89  | Mediano | 
 | 3       | Gaseosa     | 15.8   | Grande  | 
 +---------+-------------+--------+---------+
*/

-- 2 
    SELECT * FROM proveedores WHERE LOCALIDAD='QUILMES';
/*
     +--------+--------+-----------+-----------+
 | NUMERO | NOMBRE | DOMICILIO | LOCALIDAD | 
 +--------+--------+-----------+-----------+
 | 100    | PEREZ  | PERON 876 | QUILMES   | 
 +--------+--------+-----------+-----------+
*/

-- 3
    SELECT * FROM envios WHERE cantidad BETWEEN 200 and 300; 
/*
     +--------+---------+----------+
    | Numero | pNumero | Cantidad | 
    +--------+---------+----------+
    | 101    | 3       | 225      | 
    | 102    | 3       | 300      | 
    +--------+---------+----------+
*/

-- 4
    SELECT SUM(Cantidad) as Cant_total FROM envios ;
/*
 +------------+
 | Cant_total | 
 +------------+
 | 3280       | 
 +------------+
*/

-- 5
    SELECT pNumero FROM envios LIMIT 3 ;
/*
 +---------+
 | pNumero | 
 +---------+
 | 1       | 
 | 2       | 
 | 3       | 
 +---------+
 */
-- 6
    SELECT * FROM proveedores;
    SELECT * FROM envios;
    SELECT * FROM productos;

    SELECT proveedores.nombre, productos.pNombre 
    FROM envios, proveedores, productos 
    WHERE envios.Numero = proveedores.Numero
    AND envios.pNumero = productos.pNumero; 
/*
 +---------+-------------+
 | nombre  | pNombre     | 
 +---------+-------------+
 | PEREZ   | Caramelos   | 
 | AGUIRRE | Caramelos   | 
 | PEREZ   | Cigarrillos | 
 | GIMENEZ | Cigarrillos | 
 | PEREZ   | Gaseosa     | 
 | GIMENEZ | Gaseosa     | 
 | AGUIRRE | Gaseosa     | 
 +---------+-------------+
 */

 -- 7
    SELECT e.Cantidad, p.Precio, SUM(e.CANTIDAD*p.Precio) as monto_total
    FROM envios as e, productos as p
    WHERE e.pNumero = p.pNumero
    GROUP BY e.Cantidad, p.Precio; 
/*
 +-------------------+
 | monto_total       | 
 +-------------------+
 | 82883.94917011261 | 
 +-------------------+
 */