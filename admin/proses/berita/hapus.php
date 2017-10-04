<?php
include '../../conf.php';
include '../../conn.php';
$id_berita = get('id_berita');
$hapus = $koneksi->prepare("DELETE FROM berita WHERE `id_berita` = '" . $id_berita . "'");
$hapus->execute();
header("location:../../index.php?p=berita");
?>