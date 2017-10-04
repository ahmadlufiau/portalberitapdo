<?php
$hasil = $koneksi->prepare("SELECT berita.id_berita, berita.judul,berita.tanggal,login.nama_login, kategori.nama_kategori, berita.isi, berita.gambar
FROM berita
JOIN kategori ON berita.id_kategori = kategori.id
JOIN login ON berita.id_login = login.id
ORDER BY RAND() LIMIT 5");
$hasil->execute();
$data = $hasil->fetchAll();
?>
<div class="row column">
	<p class="lead">TRENDING TOPIC</p>
	<?php foreach ($data as $berita) {?>
	<div class="media-object">
		<div class="media-object-section">
			<img class="thumbnail" src="admin/assets/gambar/<?php echo $berita['gambar']; ?>" width='150px' height='300px'">
		</div>
		<div class="media-object-section">
			<h5 style="color:black"><a href="?link=lihatdetailberita.php&id_berita=<?=$berita['id_berita'];?>"><?php echo $berita['judul']; ?></a></h5>
		</div>
	</div>
	<?php }
	?>
</div>