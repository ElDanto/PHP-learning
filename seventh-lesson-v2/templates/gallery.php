<h1><?php echo $data['title']; ?></h1>
    <div class="wrapper" style="text-align: center;">
    <?php foreach($data['dataImages'] as $dataImage): ?>
        <a href="image.php?id=<?php echo $dataImage['id']; ?>">
            <img src="<?php echo $dataImage['path']?>" alt="" srcset="" style="width: 50%; height: auto;">
                    </a>
                                <?php endforeach; ?>
                                                    </div>