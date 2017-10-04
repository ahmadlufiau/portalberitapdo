<?php
$hasil = $koneksi->prepare("SELECT berita.id_berita, berita.judul,berita.tanggal,login.nama_login, kategori.nama_kategori, berita.isi, berita.gambar
FROM berita
JOIN kategori ON berita.id_kategori = kategori.id
JOIN login ON berita.id_login = login.id
ORDER BY id_berita DESC");
$hasil->execute();
$data = $hasil->fetchAll();
include("tgl.php");
?>
<div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">
<article>
<?php foreach ($data as $berita) {?>
<div class="row">
<div class="large-6 columns">
<p><img src="admin/assets/gambar/<?php echo $berita['gambar']; ?>" width='700px' height='393px'></p>
</div>
<div class="large-6 columns">
<h5><a href="?link=lihatdetailberita.php&id_berita=<?=$berita['id_berita'];?>"><?php echo $berita['judul']; ?></a></h5>
<p>
<span class="alert label"><?php echo $berita['nama_login'];?></span>
<span class="alert label"><?php echo TanggalIndo($berita['tanggal']); ?></span>
<span class="alert label"><?php echo $berita['nama_kategori']; ?></i></span>
</p>
<p><?=substr($berita['isi'], 0, 170);?></p>
</div>
</div>
<hr>
<?php }
?>
<ul class="pagination" role="navigation" aria-label="Pagination">
<li class="disabled">Previous <span class="show-for-sr">page</span></li>
<li class="current"><span class="show-for-sr">You're on page</span> 1</li>
<li><a href="#" aria-label="Page 2">2</a></li>
<li><a href="#" aria-label="Page 3">3</a></li>
<li><a href="#" aria-label="Page 4">4</a></li>
<li><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
</ul>
</article>
</div>