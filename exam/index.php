<?php
// require __DIR__ . '/classes/autoload.php';
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';

require __DIR__ . '/classes/Models/Albums.php';

$db = new DB();
$sqlArray = $db->query('SELECT * FROM `albums` ORDER BY `year`DESC');

$view = new View;

$albumsData = new Albums($sqlArray);
$albums = $albumsData->getData();

include_once __DIR__ . '/templates/albums.php';