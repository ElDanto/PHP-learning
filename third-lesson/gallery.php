<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
    <?php 
    $images = include __DIR__ . '/array-images.php';
    ?>
    <div>
        <?php foreach($images as $key => $item):?>
            <a href="/third-lesson/image.php?id=<?php echo $item['id']; ?>"><img src="<?php echo $item['url']; ?>" alt="" srcset=""></a>      
        <?php endforeach; ?>
    </div>
</body>
</html>