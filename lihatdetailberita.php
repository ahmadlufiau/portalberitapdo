<?php  
$hasil = $koneksi->prepare("SELECT berita.id_berita, berita.judul,berita.tanggal,login.nama_login, kategori.nama_kategori, berita.isi, berita.gambar
FROM berita
JOIN kategori ON berita.id_kategori = kategori.id
JOIN login ON berita.id_login = login.id where id_berita='$_GET[id_berita]'");
$hasil->execute();
$data = $hasil->fetch();
?> 

<div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">
<article>
<div class="row">
<div class="large-12 columns"> 
<div><h2><?=$data['judul'];?></h2></div>  
<div><p>
<span class="alert label">Diposting Oleh <?=$data['nama_login'];?></span>
<span class="alert label"><?=$data['nama_kategori'];?></span>
<span class="alert label"><?=$data['tanggal'];?></span>
</p>
</div>   
<p><img src="admin/assets/gambar/<?php echo $data['gambar']; ?>" width='100%' height='393px'></p>
<div><p><?=$data['isi'];?></p></div>  
</div>
</div>
<article>
</div>