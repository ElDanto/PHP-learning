<?php
require __DIR__ . '/model/View.php';

require __DIR__ . '/model/GuestBook.php';

require __DIR__ . '/model/News.php';

$view = new View();

/**
 * GuestBook
 */

$book = new GuestBook(__DIR__ . '/../fourth-lesson/guestbook.txt');
$book_lines = $book->getData();

/**
 * News
 */

$news = new News(__DIR__ . '/news.txt');

include __DIR__ . '/view/index.php';    