<footer>
<div class="row expanded callout secondary">
<div class="large-4 columns">
<h5 style="color:white;">TUBAN STREET</h5>
<p class="footer-links">
        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a> <br>
        <a href="about.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Tentang Kami</a> <br>
        <a href="kontak.php"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; Kontak Kami</a> <br>
        <a href="galeri.php"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp; Gallery</a> <br>
        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp; Video</a> <br>       
</p>
</div>
<?php
$hasil = $koneksi->prepare("SELECT * FROM kategori ORDER BY id DESC");
$hasil->execute();
$data = $hasil->fetchAll();?>
<div class="large-4 columns">
<h5 style="color:white;">KATEGORI</h5>
<?php foreach ($data as $key) {?>
<span class="secondary label"><?php echo $key['nama_kategori']; ?></span>
<?php }?>
</div>
<div class="large-4 columns">
<h5 style="color:white;">SEKILAS TUBAN STREET</h5>
<p style="color:white;">Tuban Street merupakan portal informasi kota tuban mulai dari wisata, lowongan pekerjaan, berita, event dan lain - lain. Dengan adanya website ini diharapkan mempermudah informasi yang ada di Kota Tuban. </p>
</div>
</div>
<div class="row expanded">
<div class="medium-12 columns">
<p style="color:#000;text-align: center;font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;font-size: 15px;">
Copyright © 2016 Ahmad Lufi Alfianul Ula
</p>
</div>
</div>
</footer>
<script src="admin/assets/js/imron.js"></script>
<script src="admin/assets/js/jquery-2.1.4.min.js"></script>
</body>
</html>