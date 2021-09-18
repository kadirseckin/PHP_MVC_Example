
<br>
<div class="container">
	<h3>Markalar</h3>
	<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad</th>
      <th scope="col">Ürünler</th>
  
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($veriler as $marka) {
  	 ?>
    <tr>
      <th><?php echo $marka['id']  ?></th>
      <td><?php echo $marka['ad']  ?> </td>
       <td>
        <a href="index.php?url=urunFiltre&id=<?php echo $marka['id'] ?>">
          <button class="btn btn-primary">Ürünler</button>
        </a>
      </td>
      
    </tr>
    <tr>
  <?php } ?>

  </tbody>
</table>
</div>