<?php
$date = date("d.m.Y");
$dir = __DIR__ . '/images/' . $date;
if (!file_exists($dir)) {
    mkdir($dir);
}
if(isset($_FILES['myimg'])){
    if (0 === $_FILES['myimg']['error']) {
        $name = $_FILES['myimg']['name'];
        $file = $_FILES['myimg']['tmp_name'];
        move_uploaded_file($file, $dir . DIRECTORY_SEPARATOR  . $name);
    }
}


header('Location: http://learn-php.local/fourth-lesson/gallery.php');
exit; 