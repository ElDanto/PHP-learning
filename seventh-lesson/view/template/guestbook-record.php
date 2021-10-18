<article>
    <?php if(!empty($data['author'])): ?>
        <h1><?php echo $data['author'];?></h1>
    <?php endif; ?>

    <?php if(!empty($data['message'])): ?>
        <div><?php echo $data['message'];?></div>
    <?php endif; ?>

    <?php if(!empty($data['rating'])): ?>
        <div>Rating: <?php echo $data['rating'];?></div>
    <?php endif; ?>
</article>