<?php
$reviewing = !empty($_POST['reviewing']) ? $_POST['reviewing'] : false;
if ($reviewing) {
    $name = !empty($_POST['name']) ? $_POST['name'] : 'Guest';
    $rating = !empty($_POST['rating']) ? $_POST['rating'] : 10;
    $post = "\n" . $name . ': ' . $reviewing . ' ' . $rating . '/10';
    $f = fopen(__DIR__ . '/guestbook.txt', 'a');
    fwrite($f, $post);
    fclose($f);
}
header('Location: http://learn-php.local/fourth-lesson/');
exit; 