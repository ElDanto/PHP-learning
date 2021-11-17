<?php require __DIR__ . '/header.php'; ?>
    <div class="hero">
        <div class="hero__back hero__back--static"></div>
        <div class="hero__back hero__back--mover"></div>
        <div class="hero__front"></div>
    </div>

    <div class="stack-slider">
        <div class="stacks-wrapper">
            <?php 
                
                foreach($albums as $album){
                    $result = $view->assign('album', $album)->display(__DIR__ . '/template-part/album.php');
                }
            ?>
        </div>
        <!-- /stacks-wrapper -->
    </div>
    <!-- /stacks -->
    <img class="loader" src="img/three-dots.svg" width="60" alt="Loader image" />
<?php require __DIR__ . '/footer.php'; ?>
