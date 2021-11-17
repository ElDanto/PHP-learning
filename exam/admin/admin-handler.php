<?php
require __DIR__ . '/../classes/DB.php';
require __DIR__ . '/../classes/Uploader.php';
$db = new DB();
if(isset($_POST['add-image'])){
    $uploader = new Uploader('gallery-image', '/../img/gallery/');
    $tempImg = $uploader->upload()->getUploadedFileName();
    $img = '/gallery/' . $tempImg;
    $data = [
        ':subtitle' => $_POST['gallery-subtitle'],
        ':thumbnail' => $img,
    ];
    $test = $db->query('INSERT INTO `gallery`( `subtitle`, `image`) VALUES (:subtitle, :thumbnail)', $data);
    
    var_dump($test);

    // header('Location: /exam/admin.php');
    // exit; 
}
if(isset($_POST['add-album'])){
    if(empty($_POST['album-name']) && empty($_POST['album-content']) && empty($_POST['album-year'])){
        header('Location: /exam/admin.php');
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
        header('Location: /exam/admin.php');
        exit; 
    }
}
if(isset($_POST['edit-album'])){
    $albumsData = [
        ':title' => $_POST['album-title'],
        ':thumbnail' => $_POST['album-thumbnail'],
        ':years' => $_POST['album-year'],
        ':records' => $_POST['album-records'],
        ':id' => $_POST['id'],
    ];
    
    $test = $db->query('UPDATE `albums` SET `title`= :title ,`thumbnail`= :thumbnail ,`year`= :years ,`records`= :records WHERE `id` = :id', $albumsData);
    
    
    header('Location: /exam/admin.php');
    exit; 
}
?>