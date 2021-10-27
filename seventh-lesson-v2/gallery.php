<?php
require __DIR__ . '/classes/View.php';
require __DIR__ . '/models/Gallery.php';

$gallery = new Gallery('db/images.txt');
$dataImages = $gallery->getPosts();

$title = 'Gallery';
$view = new View();
$view->assign('title', $title)
     ->assign('dataImages', $dataImages)
     ->display(__DIR__ . '/templates/gallery.php');
?>
<form action="/seventh-lesson-v2/handler.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimg">
    <input type="submit" value="Send">
</form>