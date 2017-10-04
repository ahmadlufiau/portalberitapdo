<?php
include '../../conf.php';
include '../../conn.php';
$id = get('id');
$hapus = $koneksi->prepare("DELETE FROM login WHERE `id` = '" . $id . "'");
$hapus->execute();
header("location:../../index.php?p=user");
?>