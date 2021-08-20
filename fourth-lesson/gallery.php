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
    $gallery = __DIR__ . '/images';
    $files = scandir($gallery, 1);
    $images = array_diff($files, ['.', '..']);
    $dirs = [];
    $img = [];
    ?>
    

    <?php
    // Recursive 
    // function getDirContents($dir, &$results = array()) {
    //     $files = scandir($dir);
    
    //     foreach ($files as $key => $value) {
    //         $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
    //         if (!is_dir($path)) {
    //             $results[] = ['path' => $path, 'type' => 'image'];
    //         } else if ($value != "." && $value != "..") {
    //             getDirContents($path, $results);

    //             $results[] = ['path' => $path, 'type' => 'folder'];
    //         }
    //     }
    
    //     return $results;
    // }

    
    // var_dump(getDirContents($gallery));
    // die();
    ?>
    <?php foreach($images as $item):?>
        <?php $path = $gallery . DIRECTORY_SEPARATOR . $item; ?>
        <?php if ( is_dir($path) ) :?>
            <?php
            $dir_files = scandir($path);
            $dir_files_clear = array_diff($dir_files, ['.', '..']);
            ?>
            <h1><?php echo $item; ?></h1>
            <?php foreach ($dir_files_clear as $image) :?>
                    <?php $inner_path = $path . DIRECTORY_SEPARATOR . $image; ?>
                    <?php if ( is_file($inner_path) ) : ?>
                        <img src="<?php echo '/fourth-lesson/images/' . $item  . DIRECTORY_SEPARATOR . $image; ?>" alt="" srcset="">
                    <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>

    <form action="/fourth-lesson/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myimg">
        <input type="submit" value="Send">
    </form>
</body>
</html>