<?php
function inc($val) {global $koneksi;include file_exists($val . '.php') ? $val . '.php' : 'nofile.php';}
function get($val) {return isset($_GET[$val]) ? htmlspecialchars($_GET[$val]) : null;}
function post($val) {return isset($_POST[$val]) ? htmlspecialchars($_POST[$val]) : null;}
?>