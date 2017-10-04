<?php
include 'conn.php';
include 'conf.php';
$nama = post('nama');
$email = post('email');
$hp= post('hp');
$pesan = post('pesan');
$simpan = $koneksi->prepare("INSERT INTO kontak (`nama`,`email`,`hp`,`pesan`) VALUES ('" . $nama . "','" . $email . "','" . $hp . "','" . $pesan . "')");
$simpan->execute();
header("location:kontak.php");
?>