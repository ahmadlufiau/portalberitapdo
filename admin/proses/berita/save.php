<?php
include '../../conf.php';
include '../../conn.php';
$judul = post('judul');
$tanggal = post('tanggal');
$id_kategori = post('id_kategori');
$id_login = post('id_login');
$isi = post('isi');
$gambar = "";if ($_FILES['gambar']['tmp_name'] != "") {
	$tmp_gambar = $_FILES['gambar']['tmp_name'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($tmp_gambar, "../../assets/gambar/" . $gambar);}
$simpan = $koneksi->prepare("INSERT INTO berita (`judul`,`tanggal`,`id_kategori`,`id_login`,`isi`,`gambar`) VALUES ('" . $judul . "','" . $tanggal . "','" . $id_kategori . "','" . $id_login . "','" . $isi . "','" . $gambar . "')");
$simpan->execute();
header("location:../../index.php?p=berita");
?>