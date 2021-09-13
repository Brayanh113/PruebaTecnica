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
    public function listarHijos(){
    	$crudPersonas = new crudPersonas();
    	return $crudPersonas -> listarHijos();
    }
    public function listarAbuelos(){
    	$crudPersonas = new crudPersonas();
    	return $crudPersonas ->listarAbuelos();
    }
}

$controladorPersonas = new controladorPersonas();

?>