<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CrudPHP</title>
  </head>
  <body>
    <?php
      // require_once '/app/conexion/conexion.php';
      // require_once '/app/persistencia/Crud.php';
      // require_once '/app/persistencia/modelos/ModeloGenerico.php';
      // require_once '/app/persistencia/modelos/Usuarios.php';
      // require_once '/app/http/controladorUsuarios.php';
      // require_once '/app/constantes/EMensajes.php';
      // require_once '/app/http/respuesta.php';

      require_once './src/roots.php';
      require_once PATH_SRC.'autoloader/autoloader.php';
      autoloader::registrar();

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
