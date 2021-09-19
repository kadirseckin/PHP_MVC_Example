<?php 
//base model

class Model{

	 protected $db;
	 
	 public function __construct(){
	 	try {
			$this->db=
				new PDO("mysql:host=localhost;dbname=sonprojedb;charset=utf8","root","");
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	 }
}

 ?>