<?php 

	class CategoryModel extends Model{
		
		public function getCategories(){
		
			return $this->db->select(
				tableName:"categories"
			);
		}

		public function getCategoryNameByCategoryID($id){
	
			return $this->db->select(
				tableName:"categories",
				where:['id'=>$id]
			);
		}
	}

 ?>