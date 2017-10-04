<?php
include '../../conf.php';
include '../../conn.php';
$id = post('id');
$nama_login = post('nama_login');
$username = post('username');
$password = post('password');
$simpan = $koneksi->prepare("UPDATE login SET `nama_login`='" . $nama_login . "',`username`='" . $username . "',`password`='" . md5($password) . "' WHERE `id` ='" . $id . "'");
$simpan->execute();
header("location:../../index.php?p=user");
?>
