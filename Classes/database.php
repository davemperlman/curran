<?php
/**
* 
*/
namespace Classes;
use PDO;
class database
{
	static $connection;
	
	public static function connect() {
			self::$connection = new PDO('mysql:dbname=curran;host=127.0.0.1', 'root', 'root');
			return self::$connection;
	}
	public static function set($query) {
		self::connect()->query($query);
	} 
	public static function get($query) {
		$result = self::connect()->query($query)->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	} 
}

