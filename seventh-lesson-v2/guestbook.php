<?php
require __DIR__ . '/models/GuestBook.php';
require __DIR__ . '/classes/View.php';

$book = new GuestBook('db/guestbook.txt');
$posts = $book->getPosts();

$title = 'GuestBook';
$view = new View();
$view->assign('title', $title)
    ->assign('posts', $posts)
    ->display(__DIR__ . '/templates/guestbook.php');