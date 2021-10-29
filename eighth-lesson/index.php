<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';
$db = new DB();
$data = $db->query('SELECT * FROM `news` ORDER BY `id` DESC');

$view = new View;
$template = __DIR__ . '/template/news.php';
$news = [];
foreach($data as $record){
    if(empty($record->title)){
        $record->title = substr($record->text, 0, 30) . '...';
    }
    
    $news[] = $record;
}
$view->assign('news', $news)->display($template);
// foreach($data as $record){
//     if(empty($record->title)){
//         $record->title = substr($record->text, 0, 20) . '...';
//     }
//     $view->assign('record', $record)
//          ->display($template);
// }

//INSERT INTO `news`(`id`, `title`, `text`, `author`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')