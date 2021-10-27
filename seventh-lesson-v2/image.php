<?php
require __DIR__ . '/models/Gallery.php';
require __DIR__ . '/classes/View.php';

$image = new Gallery('db/images.txt');

if(isset($_GET['id'])){
    $post = $image->getByID($_GET['id']);
    $view = new View();
    $view->assign('path', $post['path'])
         ->display(__DIR__ . '/templates/image.php');
}