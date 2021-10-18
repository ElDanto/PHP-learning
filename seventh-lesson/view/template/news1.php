<?php foreach($news->getPosts() as $post):?>
    <article>
        <a href="?id=<?php echo  $post->id; ?>"><h1><?php echo $post->title; ?></h1></a>
        <div><?php echo $post->content; ?></div>
    </article>
<?php endforeach; ?>