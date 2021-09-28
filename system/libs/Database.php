<?php 

class Database extends PDO{
	public function __construct(){
		$dsn='mysql:host=localhost;dbname=oopmvcdb';
		$user='root';
		$password='';

		parent::__construct($dsn,$user,$password);
	}

	public function select($tableName,$where=false,$orderBy=false,$limit=false){
		$sql="SELECT * from $tableName";

		if($where){
			foreach ($where as $key => $value) {
				$sql.=" WHERE $key=$value";
			}
		}

		if($orderBy){
			$sql.=" ORDER BY $orderBy";
		}

		if($limit){
			$sql.=" limit $limit";
		}

		$sth=$this->prepare($sql);

		$sth->execute();

		if($sth->rowCount()>1){
			return $sth->fetchAll(PDO::FETCH_ASSOC);
		}else{
			return $sth->fetch(PDO::FETCH_ASSOC);
		}	
	}

	public function insert($tableName,$data){
		$insertKeys=null;
		foreach ($data as $key => $value) {
			$insertKeys.= "$key=:$key,";
		}
		$insertKeys=rtrim($insertKeys,",");
	 
		$sql="INSERT INTO $tableName SET $insertKeys";
		$sth=$this->prepare($sql);

		foreach ($data as $key => $value) {
			$sth->bindValue(":$key",$value);
		}

		return $sth->execute();
	}
}

 ?>