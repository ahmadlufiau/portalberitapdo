<?php 
$hasil = $koneksi->prepare("SELECT * FROM galeri WHERE `id` = '" . get('id') . "'");
$hasil->execute();
$data = $hasil->fetch(PDO::FETCH_ASSOC);?>
<form method="POST" action="proses/galeri/update.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
<table>
<tr>
<td>Judul</td>
<td><input type="text" name="nama" value=" <?php echo $data['nama']; ?>"></td>
</tr>

<tr> <td>Gambar</td> <td><img class="img-small" src="assets/gambar/<?php echo $data['gambar']; ?>"> <input type="file" name="gambar"></td>
</tr>
<tr>
<td></td>
<td><button type="submit">Update</button></td>
</tr>
</table>
</form>