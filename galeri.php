<?php
include 'conn.php';
include 'conf.php';
include "header.php";
$hasil = $koneksi->prepare("SELECT * FROM galeri ORDER BY id DESC");
$hasil->execute();
$data = $hasil->fetchAll();
?>
<br>
<div class="row">
<div class="large-8 columns">
<h2>Gallery Tuban Street</h2>
<?php foreach ($data as $galeri) {?>
          <a href="#"><img src="admin/assets/gambar/<?php echo $galeri['gambar']; ?>" width="380" heigh="281" style="margin-bottom:5px" alt="<?php echo $galeri['nama']; ?>"></a>
<?php }
?>
</div> 
<div class="large-4 columns">
<aside>
<div class="row small-up-3">
<div class="column text-center">
<i class="fa fa-facebook fa-5x" aria-hidden="true" style="color:#376099"></i>
<h6>56,009</h6>
<p><small>FOLLOWERS</small></p>
<br>
</div>
<div class="column text-center">
<i class="fa fa-twitter fa-5x" aria-hidden="true" style="color:#6CC4E2"></i>
<h6>76,905</h6>
<p><small>FOLLOWERS</small></p>
<br>
</div>
<div class="column text-center">
<i class="fa fa-instagram fa-5x" aria-hidden="true" style="color:#527FA4"></i>
<h6>34,099</h6>
<p><small>FOLLOWERS</small></p>
<br>
</div>
<div class="column text-center">
<i class="fa fa-tumblr-square fa-5x" aria-hidden="true" style="color:#395976"></i>
<h6>13,765</h6>
<p><small>FOLLOWERS</small></p>
</div>
<div class="column text-center">
<i class="fa fa-pinterest-square fa-5x" aria-hidden="true" style="color:#E33F46"></i>
<h6>9,283</h6>
<p><small>FOLLOWERS</small></p>
</div>
<div class="column text-center">
<i class="fa fa-youtube-square fa-5x" aria-hidden="true" style="color:#DA2723"></i>

<h6>99,000</h6>
<p><small>FOLLOWERS</small></p>
</div>
</div>
<br>
<div class="row column">
<p class="lead">PASANG IKLAN</p>
<p><img src="admin/assets/img/pasang.gif" width="100%" alt="advertisement of ShamWow"></p>
</div>
<br>
<?php
include 'trending.php';
?>
</aside>
</div>
</div>


<?php
include "footer.php";
?>