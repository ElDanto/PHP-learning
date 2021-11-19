<?php
require __DIR__ . '/autoload.php';

$db = new \Classes\DB();
$sqlArray = $db->query('SELECT * FROM `albums` ORDER BY `year`DESC');

$view = new \Classes\View;

$albumsData = new \Classes\Models\Albums($sqlArray);
$albums = $albumsData->getData();

include_once __DIR__ . '/templates/albums.php';