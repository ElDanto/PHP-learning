<?php 
require __DIR__ . '/models/Article.php';
require __DIR__ . '/classes/View.php';

$article = new Article('db/news.txt');

if(isset($_GET['id'])){
    $post = $article->getByID($_GET['id']);
    $view = new View();
    $view->assign('title', $post['title'])
         ->assign('content', $post['content'])
         ->display(__DIR__ . '/templates/article.php');
}
