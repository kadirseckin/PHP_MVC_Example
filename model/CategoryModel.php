<?php 

	class CategoryModel extends Model{
		
		public function getCategories(){
	
			$query=$this->db->prepare("SELECT * FROM markalar");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getCategoryNameByCategoryID($id){
	
			$query=$this->db->prepare("SELECT ad FROM markalar where id=$id");
			$query->execute();
			return $query->fetch(PDO::FETCH_ASSOC);
		}
	}

 ?>