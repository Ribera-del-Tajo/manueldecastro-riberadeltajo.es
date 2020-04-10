<?php
// marcamos la ruta al ProductosModelo.php y a ProductosVista.php
require_once("modelo/ProductosModelo.php");
$producto=new ProductosModelo();
// Recuperamos los datos de los productos.
$matrizProductos=$producto->getProductos();
// Usamos la vista para mostrar los productos.
require_once("vista/ProductosVista.php");
?>
