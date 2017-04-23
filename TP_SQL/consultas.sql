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

 -- 8 
    SELECT sum(cantidad) as Cant_total FROM envios WHERE Numero=102 and pNumero=1;
/*
    +------------+
    | Cant_total | 
    +------------+
    | 600        | 
    +------------+
*/

-- 9 
    SELECT e.pNumero FROM envios AS e, proveedores AS p 
    WHERE e.Numero= p.NUMERO and 
    p.LOCALIDAD = "AVELLANEDA";
/*
    +---------+
    | pNumero | 
    +---------+
    | 2       | 
    | 3       | 
    +---------+
*/

-- 10
    SELECT prov.Domicilio, prov.Localidad
    FROM proveedores as prov
    WHERE nombre LIKE '%i%';
/*
    +-----------+------------+
    | Domicilio | Localidad  | 
    +-----------+------------+
    | MITRE 750 | AVELLANEDA | 
    | BOEDO 634 | BERNAL     | 
    +-----------+------------+
*/

-- 11
    INSERT INTO `productos` (`pNombre`,`Tamaño`,`Precio`) VALUES("Chocolate","Chico", 25.35);
/*
    +------------+--------------+----------+--------------+--------------+-------------+
    | fieldCount | affectedRows | insertId | serverStatus | warningCount | changedRows | 
    +------------+--------------+----------+--------------+--------------+-------------+
    | 0          | 1            | 4        | 2            | 0            | 0           | 
    +------------+--------------+----------+--------------+--------------+-------------+
 */

-- 12
    INSERT INTO proveedores VALUES();
/*
    +------------+--------------+----------+--------------+--------------+-------------+
    | fieldCount | affectedRows | insertId | serverStatus | warningCount | changedRows | 
    +------------+--------------+----------+--------------+--------------+-------------+
    | 0          | 1            | 103      | 2            | 0            | 0           | 
    +------------+--------------+----------+--------------+--------------+-------------+
*/

-- 13
    INSERT INTO proveedores (`NUMERO`,`NOMBRE`,`LOCALIDAD`)
     VALUES (107,"ROSALES","LA PLATA");
/*
     +------------+--------------+----------+--------------+--------------+-------------+
    | fieldCount | affectedRows | insertId | serverStatus | warningCount | changedRows | 
    +------------+--------------+----------+--------------+--------------+-------------+
    | 0          | 1            | 107      | 2            | 0            | 0           | 
    +------------+--------------+----------+--------------+--------------+-------------+
*/

-- 14
    UPDATE productos SET Precio=97.50 WHERE Tamaño="Grande";
/*
    +------------+--------------+----------+--------------+--------------+-------------+
    | fieldCount | affectedRows | insertId | serverStatus | warningCount | changedRows | 
    +------------+--------------+----------+--------------+--------------+-------------+
    | 0          | 1            | 0        | 34           | 0            | 1           | 
    +------------+--------------+----------+--------------+--------------+-------------+
*/

-- 15
    UPDATE productos AS prod, envios AS env SET prod.Tamaño="Mediano"
    WHERE prod.pNumero = env.pNumero AND env.Cantidad>=300  

    UPDATE productos SET tamaño="Chico" where pNumero=1
    UPDATE productos SET tamaño="Mediano" where pNumero=2
    UPDATE productos SET tamaño="Grande" where pNumero=3
    UPDATE productos SET tamaño="Chico" where pNumero=4

    SELECT * FROM productos
/*
    +---------+-------------+--------+---------+
    | pNumero | pNombre     | Precio | Tamaño  | 
    +---------+-------------+--------+---------+
    | 1       | Caramelos   | 1.5    | Mediano | 
    | 2       | Cigarrillos | 45.89  | Mediano | 
    | 3       | Gaseosa     | 97.5   | Mediano | 
    | 4       | Chocolate   | 25.35  | Chico   | 
    +---------+-------------+--------+---------+
  */

  -- 16 
    DELETE FROM PRODUCTOS WHERE pNumero=1;
/*
    +------------+--------------+----------+--------------+--------------+-------------+
    | fieldCount | affectedRows | insertId | serverStatus | warningCount | changedRows | 
    +------------+--------------+----------+--------------+--------------+-------------+
    | 0          | 1            | 0        | 2            | 0            | 0           | 
    +------------+--------------+----------+--------------+--------------+-------------+
    
    +---------+-------------+--------+---------+
    | pNumero | pNombre     | Precio | Tamaño  | 
    +---------+-------------+--------+---------+
    | 2       | Cigarrillos | 45.89  | Mediano | 
    | 3       | Gaseosa     | 97.5   | Mediano | 
    | 4       | Chocolate   | 25.35  | Chico   | 
    +---------+-------------+--------+---------+
*/

-- 17  
    DELETE 
    FROM PROVEEDORES 
    WHERE NUMERO IN
        (select * from ( 
          SELECT prov.Numero
          FROM envios as env right join proveedores AS prov
          ON env.Numero = prov.Numero 
          GROUP BY prov.Numero
          HAVING COALESCE(sum(env.Cantidad),0)=0
        )as temp)   

    SELECT * FROM PROVEEDORES
/*
 +------------+--------------+----------+--------------+--------------+-------------+
 | fieldCount | affectedRows | insertId | serverStatus | warningCount | changedRows | 
 +------------+--------------+----------+--------------+--------------+-------------+
 | 0          | 2            | 0        | 34           | 0            | 0           | 
 +------------+--------------+----------+--------------+--------------+-------------+
*/

