<?php 
include '../../conf.php';
include '../../conn.php';
$id = post('id');
$nama= post('nama');
$update_gambar = "";if ($_FILES['gambar']['tmp_name'] != "") {
	$tmp_gambar = $_FILES['gambar']['tmp_name'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($tmp_gambar, "../../assets/gambar/" . $gambar);
	$update_gambar = ",`gambar`='" . $gambar . "'";}
$simpan = $koneksi->prepare("UPDATE galeri SET `nama`='" . $nama . "' " . $update_gambar . " WHERE `id` ='" . $id . "'");
$simpan->execute();
header("location:../../index.php?p=galeri");
?>


