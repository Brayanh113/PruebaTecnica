<?php
include "../Modelo/conexion.php";
include "../Modelo/crudPersonas.php";

/**
 * summary
 */
class controladorPersonas
{

    public function __construct(){}

    public function listarPersonas(){
    	$crudPersonas = new crudPersonas();
    	return $crudPersonas -> listar();
    }
    public function listarMayores(){
    	$crudPersonas = new crudPersonas();
    	return $crudPersonas -> listarMayores();
    }
}

$controladorPersonas = new controladorPersonas();

?>