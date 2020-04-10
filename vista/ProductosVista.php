<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      td{border:1px dotted #FF0000;}
    </style>
  </head>
  <body>
    <table>
    <thead>
      <th>Código</th>
      <th>Nombre</th>
      <th>Gama</th>
      <th>PrecioVenta</th>
    </thead>
    <?php foreach ($matrizProductos as $registro): ?>
      <tr>
      </td>
      <td><?php echo $registro["CodigoProducto"];?></td>
      <td><?php echo $registro["Nombre"];?></td>
      <td><?php echo $registro["Gama"];?></td>
      <td><?php echo $registro["PrecioVenta"];?></td>
    </tr>
    <?php endforeach; ?>

  </table>
  </body>
</html>
