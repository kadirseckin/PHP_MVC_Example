<?php 
	
	class CartModel extends Model{

		public function completeThePayment($cartLog,$totalPrice){
			$this->db->insert(
				tableName:'cart',
				data:['content'=>$cartLog,'total_price'=>$totalPrice]
			);				
		}
	}
 ?>