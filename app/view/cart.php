
<br>
<div class="container">
	<h3>Your cart</h3>
	<hr>
  <div style="float:right;">
    <a href="index.php?url=clearCart">
      <button class="btn btn-danger">Clear the Cart</button>
    </a>
    <a href="index.php?url=completePayment">
      <button class="btn btn-success">
        Complete the Payment (<?php echo "$".$data[2] ?>)
    </button>
    </a>



  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Count</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
      foreach($data[0] as $key =>$cartProduct){
  	 ?>
    <tr>
      <td><?php echo $cartProduct['name']?></td>
      <td><?php echo "$".$cartProduct['price']  ?></td>
      <td><?php echo $data[1][$key] ?></td>
      <td>
        <a href="index.php?url=removeFromCart&id=<?php echo $cartProduct['id'] ?>">
          <button class="btn btn-danger">Remove</button>
        </a>
      </td>
    </tr>
    <tr>
  <?php } ?>
  </tbody>

</table>

</div>

