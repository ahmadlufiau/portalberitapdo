<?php $hasil = $koneksi->prepare("SELECT * FROM berita WHERE `id_berita` = '" . get('id_berita') . "'");
$hasil->execute();
$data = $hasil->fetch(PDO::FETCH_ASSOC);?>
<form method="POST" action="proses/berita/update.php" enctype="multipart/form-data">
<input type="hidden" name="id_berita" value="<?php echo $data['id_berita']; ?>">
<table>
<tr>
<td>Judul</td>
<td><input type="text" name="judul" value=" <?php echo $data['judul']; ?>"></td>
</tr>
<tr>
<td>Tanggal</td>
<td><input type="date" value="<?php echo $data['tanggal']; ?>" name="tanggal"></td>
</tr>

<tr>
<td>Kategori</td>
<td>
<select name="id_kategori" id = "id_kategori">
<?php
$odb = new PDO('mysql:host=localhost;dbname=uasphp', 'root', '');
$query = "select id, nama_kategori from kategori";
$datas = $odb->prepare($query);
$datas->execute();
while ($row = $datas->fetch(PDO::FETCH_ASSOC)) {
	echo '<option value="' . $row['id'] . '">' . $row['nama_kategori'] . '</option>';
}
?>
</select>
</td>
</tr>

<tr>
<td>Penulis</td>
<td>
<select name="id_login" id = "id_login">
<?php
$odb = new PDO('mysql:host=localhost;dbname=uasphp', 'root', '');
$query = "select id, nama_login from login";
$datas = $odb->prepare($query);
$datas->execute();
while ($row = $datas->fetch(PDO::FETCH_ASSOC)) {
	echo '<option value="' . $row['id'] . '">' . $row['nama_login'] . '</option>';
}
?>
 </select>
</td>
</tr>

<tr>
<td>Isi</td>
<td><textarea name="isi" rows="20" cols="100"><?php echo $data['isi']; ?></textarea></td>
</tr>
<tr> <td>Gambar</td> <td><img class="img-small" src="assets/gambar/<?php echo $data['gambar']; ?>"> <input type="file" name="gambar"></td>
</tr>
<tr>
<td></td>
<td><button type="submit">Update</button></td>
</tr>
</table>
</form>