<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CrudPHP</title>
  </head>
  <body>
    <?php
      require_once '/bin/conexion/conexion.php';
      require_once '/bin/persistencia/Crud.php';
      require_once '/bin/persistencia/modelos/ModeloGenerico.php';
      require_once '/bin/persistencia/modelos/Usuarios.php';

      echo "<pre>";
        var_dump((new Usuarios())->where("edad", "=", 2)->modificar(
          "edad" => 25
        ));
      echo "</pre>";

    ?>
  </body>
</html>
