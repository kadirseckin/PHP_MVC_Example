<?php 

	class ProductModel extends Model{
	
		 public function getProducts(){
	
			$query=$this->db->prepare("SELECT * FROM urunler");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		 public function randomProducts(){
			
			$query=$this->db->prepare("SELECT * FROM urunler order by rand() limit 10");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		 public function getProductsByCategory($id){
			
			$query=$this->db->prepare("SELECT * FROM urunler where marka_id=$id");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		 public function getUrun($id){
			
			$query=$this->db->prepare("SELECT * FROM urunler where id=$id");
			$query->execute();
			return $query->fetch(PDO::FETCH_ASSOC);
		}
	}

 ?>