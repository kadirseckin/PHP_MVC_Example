<?php 

class Database extends PDO{
	public function __construct(){
		$dsn='mysql:host=localhost;dbname=oopmvcdb';
		$user='root';
		$password='';

		parent::__construct($dsn,$user,$password);
	}
}

 ?>