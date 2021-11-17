<?php $album = $data['album']; ?>
<div class="stack">
    <h2 class="stack-title"><a href="#" data-text="<?php echo $album->title; ?>"><span><?php echo $album->title; ?></span></a></h2>
    <div class="item">
        <div class="item__content">
            <img src="<?php echo 'img' . $album->thumbnail; ?>" alt="<?php echo $album->title; ?>" />
            <h3 class="item__title"><?php echo $album->title; ?><span class="item__date"><?php echo $album->year; ?></span></h3>
            <div class="item__details">
                <ul>
                    <?php foreach($album->records as $record):?>
                    <li><span><?php echo $record; ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>