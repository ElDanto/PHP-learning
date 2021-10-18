<?php $article = $news->getPostByID($_GET['id']); ?>

<h1><?php echo $article->title; ?></h1>
<div><?php echo $article->content; ?></div>