<h2>Tambah Berita</h2>
<form method="POST" action="proses/berita/save.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Judul</td>
            <td>
                <input type="text" name="judul" placeholder="Judul Berita">
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>
                <input type="date" id="tanggal" name="tanggal" placeholder="Tanggal" >
            </td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>
                <select name="id_kategori" id = "id_kategori">
<?php
$odb = new PDO('mysql:host=localhost;dbname=uasphp', 'root', '');
$query = "select id, nama_kategori from kategori";
$data = $odb->prepare($query);
$data->execute();
while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
	echo '<option value="' . $row['id'] . '">' . $row['nama_kategori'] . '</option>';
}
?>
 </select>
            </td>
        </tr>
        <tr>
            <td>Penulis :</td>
            <td>
                <select name="id_login" id = "id_login">
<?php
$odb = new PDO('mysql:host=localhost;dbname=uasphp', 'root', '');
$query = "select id, nama_login from login";
$data = $odb->prepare($query);
$data->execute();
while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
	echo '<option value="' . $row['id'] . '">' . $row['nama_login'] . '</option>';
}
?>
 </select>
            </td>
        </tr>
        <tr>
            <td>Konten</td>
            <td>
                <textarea name="isi" rows="20" cols="100"></textarea>
            </td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>
                <input type="file" name="gambar">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Simpan</button>
            </td>
        </tr>
    </table>
</form>