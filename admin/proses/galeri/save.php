<?php
include '../../conf.php';
include '../../conn.php';
$nama = post('nama');
$gambar = "";if ($_FILES['gambar']['tmp_name'] != "") {
	$tmp_gambar = $_FILES['gambar']['tmp_name'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($tmp_gambar, "../../assets/gambar/" . $gambar);}
$simpan = $koneksi->prepare("INSERT INTO galeri (`nama`,`gambar`) VALUES ('" . $nama . "','" . $gambar . "')");
$simpan->execute();
header("location:../../index.php?p=galeri");
?>