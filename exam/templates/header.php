<?php 
session_start();
$userName = 'Guest';
if(isset($_SESSION['user'])){
	$userName = $_SESSION['user'];
}

$link = '/exam/admin/auth-handler.php?logout';
if($_SESSION['id'] == 1){
	$link = '/exam/admin.php';
}


function currentPage($name){
	$url = $_SERVER['REQUEST_URI'];
	$url = explode('?', $url);
	$url = $url[0];

	$path = mb_substr($url, 6, -4);
	if($path == $name){
		return 'menu__item--current';
	}
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Discografy Website Concept</title>
	<meta name="description" content="A photography-inspired website layout with an expanding stack slider and a background image tilt effect" />
	<meta name="keywords" content="photography, template, layout, effect, expand, image stack, animation, flickity, tilt" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/flickity.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">
        <header class="codrops-header">
			<h1 class="codrops-title">Kurt Donald Cobain <span>Singer</span></h1>
			<nav class="menu">
				<a class="menu__item <?php echo currentPage('admin');?>" href="<?php echo $link;?>"><span><?php echo $userName;?></span></a>
				<a class="menu__item <?php echo currentPage('gallery');?>" href="gallery.php"><span>Gallery</span></a>
				<a class="menu__item <?php echo currentPage('index');?>" href="index.php"><span>Albums</span></a>
			</nav>
		</header>
