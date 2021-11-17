<?php require __DIR__ . '/header.php'; ?>
    <div class="stage">
        <?php 
        foreach($galleryData as $image){
            $view->assign('image' , $image)
                 ->display(__DIR__ . '/template-part/image.php');
        }
        ?> 
    </div>
<?php require __DIR__ . '/footer.php'; ?>