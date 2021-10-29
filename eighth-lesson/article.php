<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';
$db = new DB();
$data = $db->query('SELECT * FROM `news` WHERE id=:id', [':id' => $_GET['id']]);

$view = new View;
$template = __DIR__ . '/template/article.php';

foreach($data as $record){
    $view->assign('record', $record)
         ->display($template);
}