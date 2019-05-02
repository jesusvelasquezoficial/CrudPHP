<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CrudPHP</title>
  </head>
  <body>
    <?php
      require_once '/bin/conexion/conexion.php';
      require_once '/bin/persistencia/crud.php';

      $crud = new Crud('usuarios');

      $id_insertado = $crud->insert([
        "nombre" => "Jesus",
        "apellido" => "Velasquez",
        "edad" => 22,
        "email" => "jesusvelasquezoficial@gmail.com",
        "telefono" => "04123199657",
        "fecha_registro" => date("Y-m-d H:i:s")
      ]);
      
      echo "El ID INSERTADO ES: ".$id_insertado;
      echo "<br/>";

      // $id_modificado = $crud->where("id", "=", 4)->modificar([
      //   "email" => "fagredameza@gmail.com"
      // ]);
      //
      // echo "El ID MODIFICADO ES: ".$id_modificado;
      // echo "<br/>";

      // $id_eliminado = $crud->where("id", "=", 4)->borrar();
      // echo "El ID ELIMINADO ES: ".$id_eliminado;
      // echo "<br/>";

      $lista = $crud->get();

      echo "<pre>";
        var_dump($lista);
      echo "</pre>";

    ?>
  </body>
</html>
