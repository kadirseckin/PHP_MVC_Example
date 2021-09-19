<?php 
	
	class CartModel extends Model{

		public function completeThePayment($cartLog){
			
			$query=$this->db->prepare("INSERT INTO  sepet SET
				icerik=:icerik
			");

			$query->execute(array(
				'icerik'=>$cartLog,
			));
			
			
		}
	}
 ?>