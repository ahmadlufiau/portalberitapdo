<?php 
include '../../conf.php';
include '../../conn.php';
$id_berita = post('id_berita');
$judul= post('judul');
$tanggal = post('tanggal');
$id_kategori = post('id_kategori');
$id_login = post('id_login');
$isi = post('isi');
$update_gambar = "";if ($_FILES['gambar']['tmp_name'] != "") {
	$tmp_gambar = $_FILES['gambar']['tmp_name'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($tmp_gambar, "../../assets/gambar/" . $gambar);
	$update_gambar = ",`gambar`='" . $gambar . "'";}
$simpan = $koneksi->prepare("UPDATE berita SET `judul`='" . $judul . "',`tanggal`='" . $tanggal . "',`id_kategori`='" . $id_kategori . "',`id_login`='" . $id_login . "', `isi`='" . $isi . "' " . $update_gambar . " WHERE `id_berita` ='" . $id_berita . "'");
$simpan->execute();
header("location:../../index.php?p=berita");
?>


