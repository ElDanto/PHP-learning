<?php $image = $data['image']; ?>
<div class="image-gallery" style="padding: 10px; width: 33%; float: left;">
    <a href="image.php?id=<?php echo $image->id; ?>">
        <img src="<?php echo 'img/'. $image->path; ?>" alt="" style="width: 100%; height: auto; border: 0;">
        <h3><?php echo $image->subtitle; ?></h3>
    </a>
</div>