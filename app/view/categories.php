
<br>
<div class="container">
	<h3>Categories</h3>
	<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Related Products</th>
  
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data as $category) {
  	 ?>
    <tr>
      <td><?php echo $category['name']  ?> </td>
       <td>
        <a href="index.php?url=productsByCategory&id=<?php echo $category['id'] ?>">
          <button class="btn btn-primary">Related Products</button>
        </a>
      </td>
      
    </tr>
    <tr>
  <?php } ?>

  </tbody>
</table>
</div>