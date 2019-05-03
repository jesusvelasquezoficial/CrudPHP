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
      require_once '/bin/http/controladorUsuarios.php';


      $usuario = [
        "idUsuario" => 2,
        "edad" => 45
      ];

      $controladorUsuarios = new controladorUsuarios();
      // $controladorUsuarios->insertarUsuario($usuario);
      // $result = $controladorUsuarios->listarUsuarios();
      // var_dump($result);
      //
      // $result = $controladorUsuarios->buscarUsuarioPorId(2);
      // var_dump($result);

      $result = $controladorUsuarios->actualizarUsuario($usuario);
      var_dump($result);

    ?>
  </body>
</html>
