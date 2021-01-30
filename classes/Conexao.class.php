<?php
require_once 'config.inc.php';

class Conexao {
	private static $conexao;
	
	private static function getConexao() {
		if (!isset(self::$conexao)) {
			try {
				self::$conexao = new PDO('mysql:host='. HOST . ';dbname='. DBNAME, USER, PASS);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
			
			return self::$conexao;
		}
	}
	
	public static function prepare($sql) {
		return self::getConexao()->prepare($sql);
	}
}