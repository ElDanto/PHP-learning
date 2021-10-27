<?php
require __DIR__ . '/models/News.php';
require __DIR__ . '/classes/View.php';

$news = new News('db/news.txt');
$posts = $news->getPosts();

$title = 'Новости';
$view = new View();
$view->assign('title', $title)
    ->assign('posts', $posts)
    ->display(__DIR__ . '/templates/news.php');