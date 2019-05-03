<?php

/**
 *
 */
class controladorUsuarios {

  function __construct(argument) {

  }

  public function insertarUsuario($usuario) {
    $usuarioModel = new Usuario();
    $id = $usuarioModel->insert($usuario);
    
  }

}

 ?>
