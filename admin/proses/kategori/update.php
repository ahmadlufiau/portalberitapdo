<?php
include '../../conf.php';
include '../../conn.php';
$id = post('id');
$nama_kategori = post('nama_kategori');
$simpan = $koneksi->prepare("UPDATE kategori SET `nama_kategori`='" . $nama_kategori . "' WHERE `id` ='" . $id . "'");
$simpan->execute();
header("location:../../index.php?p=kategori");
?>
