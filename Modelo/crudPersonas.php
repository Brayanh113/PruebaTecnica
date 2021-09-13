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

	public function listarHijos(){
		$Db = Db::Conectar();

		$sql = $Db -> query("SELECT `personas`.`nombre`, `personas`.`id`, `personas`.`n_hijos`, `personas`.`apellido`\n"

    . "FROM `personas` WHERE `personas`.`n_hijos`> 1");
		$sql -> execute();
		Db::CerrarConexion($Db);
		return $sql -> fetchAll();

	}

	public function listarAbuelos(){
		$Db = Db::Conectar();

		$sql = $Db -> query("SELECT `personas`.`id`, `personas`.`hijos`, `padres`.`idPadres`, `padres`.`nombre`, `padres`.`apellido`\n"

    . "FROM `personas` \n"

    . "	LEFT JOIN `padres` ON `personas`.`idPadres` = `padres`.`idPadres` WHERE `personas`.`hijos` = 1");
		$sql -> execute();
		Db::CerrarConexion($Db);
		return $sql -> fetchAll();

	}
}

?>