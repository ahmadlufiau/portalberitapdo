<?php
include '../../conf.php';
include '../../conn.php';
$nama_login = post('nama_login');
$username = post('username');
$password = post('password');
$simpan = $koneksi->prepare("INSERT INTO login (`nama_login`,`username`,`password`) VALUES ('" . $nama_login . "','" . $username . "','" . md5($password) . "')");
$simpan->execute();
header("location:../../index.php?p=user");
?>