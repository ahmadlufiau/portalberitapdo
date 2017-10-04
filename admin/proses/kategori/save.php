<?php
include '../../conf.php';
include '../../conn.php';
$nama_kategori = post('nama_kategori');
$simpan = $koneksi->prepare("INSERT INTO kategori (`nama_kategori`) VALUES ('" . $nama_kategori . "')");
$simpan->execute();
header("location:../../index.php?p=kategori");
?>