<h1><?php echo $data['title']; ?></h1>
<?php foreach($data['posts'] as $post) : ?>
    <a href="article.php?id=<?php echo $post['id']; ?>">
        <?php echo $post['title']; ?>
    </a>  
    <div><?php echo $post['content']; ?></div>
    <hr>
<?php endforeach; ?>