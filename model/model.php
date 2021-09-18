<?php 

class Model{

 private $db;
 
 public function __construct(){
 	try {
		$this->db=
			new PDO("mysql:host=localhost;dbname=sonprojedb;charset=utf8","root","");
	} catch (Exception $e) {
		echo $e->getMessage();
	}

 }

 public function getUrunler(){
	
	$query=$this->db->prepare("SELECT * FROM urunler");
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

 public function randomUrunler(){
	
	$query=$this->db->prepare("SELECT * FROM urunler order by rand() limit 10");
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

 public function getUrunFiltre($id){
	
	$query=$this->db->prepare("SELECT * FROM urunler where marka_id=$id");
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

 public function getUrun($id){
	
	$query=$this->db->prepare("SELECT * FROM urunler where id=$id");
	$query->execute();
	return $query->fetch(PDO::FETCH_ASSOC);
}


public function getMarkalar(){
	
	$query=$this->db->prepare("SELECT * FROM markalar");
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}




public function odemeyiTamamla(){

	$sepetdeger="";

	 foreach ($_COOKIE['sepet'] as $key => $value) {
     	$sepetdeger=$key.":".$value.",";      
     }

	$query=$this->db->prepare("INSERT INTO  sepet SET
		icerik=:icerik
	");

	$query->execute(array(
		'icerik'=>$sepetdeger,
	));
	
	
}

}

 ?>