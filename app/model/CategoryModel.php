<?php 

	class CategoryModel extends Model{
		
		public function getCategories(){
	
			$query=$this->db->prepare("SELECT * FROM categories");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getCategoryNameByCategoryID($id){
	
			$query=$this->db->prepare("SELECT name FROM categories where id=$id");
			$query->execute();
			return $query->fetch(PDO::FETCH_ASSOC);
		}
	}

 ?>