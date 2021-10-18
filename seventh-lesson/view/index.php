<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    /**
    * GuestBook
    **/

    if(isset($_GET['guestbook']))
    {
        $template = __DIR__ . '/template/guestbook-record.php';
        foreach($book_lines as $reviewing)
        {
            foreach ($reviewing as $key => $value)
            {
                $view->assing($key, $value);
            }
            $view->display($template); 
        }
    }

    /**
    * News
    **/

    if(isset($_GET['news']))
    {
        $template = __DIR__ . '/template/news.php';
        foreach($news->getPosts() as $data){
            $view->assing('title', $data->title);
            $view->assing('content', $data->content);
            $view->assing('id', $data->id);
            $view->display($template);
        }
       // include __DIR__ . '/template/news1.php';
    }

    /**
    * Article
    **/
    
    if(isset($_GET['id']))
    {
        $template = __DIR__ . '/template/article.php';

        $data = $news->getPostByID($_GET['id']); 

        $view->assing('title', $data->title);
        $view->assing('content', $data->content);

        $view->display($template);

        // include __DIR__ . '/template/article1.php'; 
    }

?>
    <a href="?news" style="color: #182A36; text-decoration: none; font-size: 24px; font-weight: bold;">Новости</a>
    <a href="?home" style="color: #6999B0; text-decoration: none; font-size: 24px; font-weight: bold;">На главную</a>
    <a href="?guestbook" style="color: #F55030; text-decoration: none; font-size: 24px; font-weight: bold;">Гостевая книга</a>
</body>
</html>