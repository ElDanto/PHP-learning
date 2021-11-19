<?php
require __DIR__ . '/autoload.php';

// require __DIR__ . '/classes/DB.php';
// require __DIR__ . '/classes/View.php';

// require __DIR__ . '/classes/Models/Gallery.php';

$db = new \Classes\DB();
$sqlArray = $db->query('SELECT * FROM `gallery` ORDER BY `id`DESC');

$view = new \Classes\View;

$gallery = new \Classes\Models\Gallery($sqlArray);
$galleryData = $gallery->getData();

include_once __DIR__ . '/templates/gallery.php';