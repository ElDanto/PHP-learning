<?php
require __DIR__ . '/models/Uploader.php';
if(isset($_FILES)){
    $uploader = new Uploader( __DIR__ . '/db/images.txt' );
    $upload = $uploader->setUploadData('myimg')->upload();
    $newFilePath = $uploader->getUploadedFilePath();
    $id = $_FILES['myimg']['size'];
    $newFilePath = stristr($newFilePath, 'uploads');
    $uploader->addRecord([$id, $newFilePath]);
}

header('Location: http://learn-php.local/seventh-lesson-v2/gallery.php');
exit;