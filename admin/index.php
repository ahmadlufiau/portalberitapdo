<?php
session_start();
include 'conn.php';
include 'conf.php';
if(isset($_SESSION['username'])== 0) { 
	header('Location: login.php'); 
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Tuban Street</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"/>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script> 
<link rel="stylesheet" type="text/css" href="assets/css/imron.css">
<link rel="stylesheet" type="text/css" href="assets/css/imronadmin.css">
<script type="text/javascript" src="assets/tinymce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        convert_newlines_to_brs: "false",
      	force_p_newlines : false,
      	force_br_newlines : false,
      	forced_root_block : "",
      	apply_source_formatting : false,   	
});
</script>
</head>
<body>
<div class="top-gray"></div>
<div class="header">
<div class="big-logo">Tuban Street</div>
<?php include 'menu.php';?>
</div>
<div class="content">
<div class="container">
<?php if (!is_null(get('p'))) {
	switch (get('p')) {
	case 'home':inc('home');
		break;
	case 'kategori':switch (get('m')) {
		case 'home':inc('view/kategori/index');
			break;
		case 'add':inc('view/kategori/add');
			break;
		case 'edit':inc('view/kategori/edit');
			break;
		default:
			inc('view/kategori/index');
			break;
		}break;
	case 'berita':switch (get('m')) {
		case 'home':inc('view/berita/index');
			break;
		case 'add':inc('view/berita/add');
			break;
		case 'edit':inc('view/berita/edit');
			break;
		default:
			inc('view/berita/index');
			break;
		}break;
	case 'galeri':switch (get('m')) {
		case 'home':inc('view/galeri/index');
			break;
		case 'add':inc('view/galeri/add');
			break;
		case 'edit':inc('view/galeri/edit');
			break;
		default:
			inc('view/galeri/index');
			break;
		}break;
	case 'user':switch (get('m')) {
		case 'home':inc('view/user/index');
			break;
		case 'add':inc('view/user/add');
			break;
		case 'edit':inc('view/user/edit');
			break;
		default:
			inc('view/user/index');
			break;
		}break;
	case 'kontak':switch (get('m')) {
		case 'home':inc('view/kontak/index');
			break;
		default:
			inc('view/kontak/index');
			break;
		}break;
	default:
		inc('home');
		break;
	}} else {inc('home');}
?>
</div>
</div>
</body>
</html>