<?php

//if there is no constant defined called __CONFIG__, do not load this file.
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class DB {

	protected static $con;

	private function __construct() {

		try {

			self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=wildmio', 'wildmio', 'MSrice718293' );
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );

		} catch (PDOException $e) {
			echo "Could not connect to database.\r\n";
			exit;
		}
	}

	public static function getConnection() {

		//If this instance was not been started, start it.
		if(!self::$con) {
			new DB();
		} 

		//Return the writeable db connection
		return self::$con;
	}
}

?>