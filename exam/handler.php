<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/Uploader.php';
$db = new DB();
var_dump($_POST);
if(isset($_POST['album-name'])){
    if(empty($_POST['album-name']) && empty($_POST['album-content']) && empty($_POST['album-year'])){
        header('Location: http://learn-php.local/exam/admin.php');
        exit; 
    }else{
        $img = '';
        $uploader = new Uploader('albums-cover', '/../img/albums/');
        $tempImg = $uploader->upload()->getUploadedFileName();
        if($tempImg){
            $img = '/albums/' . $tempImg;
        }
        
        $albumsData = [
            ':title' => $_POST['album-name'],
            ':thumbnail' => $img,
            ':years' => $_POST['album-year'],
            ':record' => $_POST['album-content'],
        ];
        $db->query('INSERT INTO `albums`(`id`, `title`, `thumbnail`, `year`, `records`) VALUES (NULL, :title , :thumbnail , :years , :record )', $albumsData);

    }
}
if(isset($_POST['album-title'])){
    $albumsData = [
        ':title' => $_POST['album-title'],
        ':thumbnail' => $_POST['album-thumbnail'],
        ':years' => $_POST['album-year'],
        ':records' => $_POST['album-content'],
    ];
    $db->query('UPDATE `albums` SET `id`= :id,`title`= :title ,`thumbnail`= :thumbnail ,`year`= :years ,`records`= :records', $albumsData);
}
?>