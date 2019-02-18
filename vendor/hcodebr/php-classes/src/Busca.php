<?php

namespace Hcode;

use Hcode\DB\Sql;

class Busca extends Sql {

	public function verificaNumeros ($jogo) {

		
		$sql = new Sql();

		$result = $sql->select("SELECT * FROM jogos WHERE numerosjogados = :jogo", [
			':jogo'=>$jogo
		]);

		return $result;
	}

	public function save ($jogo) {

		$sql = new Sql();

		$sql->query("INSERT INTO jogos (numerosjogados) VALUES (:jogo)", [
			':jogo'=>$jogo
		]);
	}

	public function listAll() {

		$_SESSION['error'] = NULL;
		$_SESSION['jogosalvo'] = NULL;

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM jogos");

		

		return $results;
	}

	public function delete ($id) {

		$sql = new Sql();

		$sql->query("DELETE FROM jogos WHERE id = :id", [
			':id'=>$id
		]);
	}

	




}


















?>