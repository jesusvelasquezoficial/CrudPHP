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
      require_once '/bin/constantes/EMensajes.php';
      require_once '/bin/http/respuesta.php';

      // echo "<pre>";

      $usuario = [
        "nombre" => "Jesus",
        "apellido" => "Velasquez",
        "edad" => 22,
        "email" => "Jesusvelasquezoficial@gmail.com",
        "telefono" => "04123199657",
        "fecha_registro" => date("Y-m-d H:i:s")
      ];

      $controladorUsuarios = new controladorUsuarios();
      // $controladorUsuarios->insertarUsuario($usuario);
      $result = $controladorUsuarios->listarUsuarios();
      // $result = $controladorUsuarios->listarUsuarios()->json();
      var_dump($result);
      // echo $result;

      // $result = $controladorUsuarios->buscarUsuarioPorId(2);
      // var_dump($result);
      //
      // $result = $controladorUsuarios->actualizarUsuario($usuario);
      // var_dump($result);

      // echo "</pre>";

    ?>
  </body>
</html>
