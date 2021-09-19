<?php 

	class ProductModel extends Model{
	
		 public function getProducts(){
	
			$query=$this->db->prepare("SELECT * FROM products");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		 public function randomProducts(){
			
			$query=$this->db->prepare("SELECT * FROM products order by rand() limit 10");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		 public function getProductsByCategory($id){
			
			$query=$this->db->prepare("SELECT * FROM products where category_id=$id");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		 public function getProductByID($id){
			
			$query=$this->db->prepare("SELECT * FROM products where id=$id");
			$query->execute();
			return $query->fetch(PDO::FETCH_ASSOC);
		}
	}

 ?>