<?php 
	
	class CartModel extends Model{

		public function completeThePayment($cartLog,$totalPrice){
			
			$query=$this->db->prepare("INSERT INTO  cart SET
				content=:content,
				total_price=:total_price
			");

			$query->execute(array(
				'content'=>$cartLog,
				'total_price'=>$totalPrice
			));
			
			
		}
	}
 ?>