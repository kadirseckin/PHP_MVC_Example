<?php 

	class ProductModel extends Model{
	
		 public function getProducts(){
			return $this->db->select(
				tableName:"products"
			);
		 }

		 public function randomProducts(){
			
			return $this->db->select(
				tableName:"products",
				orderBy:"rand()",
				limit:"10"
			);
		}

		 public function getProductsByCategory($id){
		
			return $this->db->select(
				tableName:"products",
				where:['category_id'=>$id]
			);
		}

		 public function getProductByID($id){
			
			return $this->db->select(
				tableName:"products",
				where:['id'=>$id]
			);
		}
	}

 ?>