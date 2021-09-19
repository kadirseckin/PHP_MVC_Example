
<br>
<div class="container">
	<h3>Anasayfa - Rastgele Ürünler</h3>
	<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad</th>
      <th scope="col">Marka</th>
      <th scope="col">Fiyat</th>
      <th scope="col">Sepete ekle</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data[0] as $key => $urun) {
  	 ?>
    <tr>
      <th><?php echo $urun['id']  ?></th>
      <td><?php echo $urun['ad']  ?></td>
      <td><?php echo $data[1][$key]['ad']  ?></td>
      <td><?php echo $urun['fiyat']  ?></td>
      <td>
        <a href="index.php?url=sepetEkle&id=<?php echo $urun['id'] ?>">
          <button class="btn btn-success">Sepete ekle</button>
        </a>
      </td>
    </tr>
    <tr>
  <?php } ?>

  </tbody>
</table>
</div>