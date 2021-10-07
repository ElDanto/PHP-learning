<?php
include __DIR__ . '/class-guestbook.php';
$path = __DIR__ . '/test-book.txt';
$guestbook = new GuestBook($path);

include __DIR__ . '/class-upload.php';
$uplaoder = new Uploader('myimg');

if(!empty($_POST)){
    $message = !empty($_POST['reviewing']) ? $_POST['reviewing'] : false;
    $name = !empty($_POST['name']) ? $_POST['name'] : 'Guest';
    $rating = !empty($_POST['rating']) ? $_POST['rating'] : 10;

    $guestbook->append($message, $name, $rating);
    $guestbook->save();
}
if( !empty($_FILES) ){
    $upload = $uplaoder->upload()->getUploadedFilePath();
}
header('Location: http://learn-php.local/sixth-lesson/index.php');
exit;