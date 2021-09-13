<?php

class crudPersonas{

	public function _construct(){}

	public function listar(){
		$Db = Db::Conectar();

		$sql = $Db -> query("SELECT * FROM `personas`");
		$sql -> execute();
		Db::CerrarConexion($Db);
		return $sql -> fetchAll();
	}

	public function listarMayores(){
		$Db = Db::Conectar();

		$sql = $Db -> query("SELECT `personas`.`id`, `personas`.`nombre`, `personas`.`edad` \n"

    . "FROM `personas` WHERE `personas`.`edad` >= 18");
		$sql -> execute();
		Db::CerrarConexion($Db);
		return $sql -> fetchAll();

	}
}

?>