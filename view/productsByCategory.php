
<br>
<div class="container">
	<h3>Products by Category</h3>
	<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Add to Cart</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($data[0] as $product){ ?>
    <tr>  
      <th><?php echo $product['id']  ?></th>
      <td><?php echo $product['name']  ?></td>
      <td><?php echo $data[1]['name'] ?></td>
      <td><?php echo "$".$product['price']  ?></td>
      <td>
        <a href="index.php?url=addToCart&id=<?php echo $product['id'] ?>">
          <button class="btn btn-success">Add to Cart</button>
        </a>
      </td>
    </tr>
       <?php } ?>
    <tr>
  

  </tbody>
</table>
</div>