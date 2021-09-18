
<br>
<div class="container">
	<h3>Sepet sayfası</h3>
	<hr>
  <div style="float:right;">
    <a href="index.php?url=sepetTemizle">
      <button class="btn btn-danger">Sepeti temizle</button>
    </a>
    <a href="index.php?url=odemeTamamla">
      <button class="btn btn-success">Ödemeyi tamamla</button>
    </a>

  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ad</th>
      <th scope="col">Fiyat</th>
      <th scope="col">Adet</th>
      <th scope="col">Sil</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
      foreach($veriler[0] as $key =>$sepetUrun){
  	 ?>
    <tr>
      <td><?php echo $sepetUrun['ad']?></td>
      <td><?php echo $sepetUrun['fiyat']  ?></td>
      <td><?php echo $veriler[1][$key] ?></td>
      <td>
        <a href="index.php?url=sepetSil&id=<?php echo $sepetUrun['id'] ?>">
          <button class="btn btn-danger">Sil</button>
        </a>
      </td>
    </tr>
    <tr>
  <?php } ?>

  </tbody>
</table>

</div>
