<?php

/**
 *
 */
class EMensajes
{
  const CORRECTO = "CORRECTO";
  const ERROR = "ERROR";
  const CONSULTA_EXITOSA = "CONSULTA_EXITOSA";
  const INSERCION_EXITOSA = "INSERCION_EXITOSA";
  const ACTUALIZACION_EXITOSA = "ACTUALIZACION_EXITOSA";
  const ELIMINACION_EXITOSA = "ELIMINACION_EXITOSA";

  public static function getMensaje($codigo) {
    switch ($codigo) {
      case EMensajes::CORRECTO:
        return new respuesta(1, "Se ha realizado la operacion de manera correcta.");
      case EMensajes::CONSULTA_EXITOSA:
        return new respuesta(1, "Se ha consultado el registro con exito.");
      case EMensajes::INSERCION_EXITOSA:
        return new respuesta(1, "Se ha insertado el registro con exito.");
      case EMensajes::ACTUALIZACION_EXITOSA:
        return new respuesta(1, "Se ha actualizado el registro con exito.");
      case EMensajes::ELIMINACION_EXITOSA:
        return new respuesta(1, "Se ha eliminado el registro con exito.");
      case EMensajes::ERROR:
        return new respuesta(-1, "Se ha producido un error al realizar la operacion.");
    }
  }
}


?>
