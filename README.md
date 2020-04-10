# proyecto_mvc

### proyecto_mvc: El proyecto es un ejemplo de uso del modelo vista controlador en PHP.

Forma parte del curso de Implantación de Aplicaciones Web de los Ciclos Formativos de Grado Superior de Adminsitración de Sistemas Informáticos y Redes.

Para probarlo correctamente además es necesario tener instalada la base de datos de pruebas: proyecto_base, que tiene dos tablas, la de usuarios y la de **productos**, esta última es la tabla que vamos a usar para probarlo.

## modelo de datos.
Para realizar la conexiónn de la base de datos se ha optado por usar PDO conectando a una base de datos mysql.
Debes crear una base de datos llamada proyecto_base, es exportar las tablas del fichero: proyecto_base-db.sql, que se adjunta en el directorio db.

## Fichero usados y estructura de directorios.
Para realizar el proyecto se ha creado la siguiente estructrua de carpetas.

a | b | c
------|--------|-------
**proyecto**  | |
file|*index.php*| 
dir |**controlador**|
 -|file |*ProductosControlador.php*
dir |**modelo**|
 -|file |*Conectar.php*
 -|file |*ProductosModelo.php*
dir |**vista**|
 -|file|*ProductosVista.php*
 dir |**db**|
 -|file|*proyecto_base-db.sql.php*
 
  
