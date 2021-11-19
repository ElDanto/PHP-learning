<?php
require __DIR__ . '/../autoload.php';
// require __DIR__ . '/../classes/DB.php';
// require __DIR__ . '/../classes/Uploader.php';
// require __DIR__ . '/../classes/Valid.php';

function adminHandler() {
    $db = new \Classes\DB();
    $result = '';
    $prev_page = '';
    switch ($_POST['action']) {
        case 'add-image':
            $data = array_merge($_POST, $_FILES);
            $result = addImageHandler($data, $db);
            $prev_page = '/exam/admin.php?add-image=1';
            break;
        
        case 'add-album':
            $data = array_merge($_POST, $_FILES);
            $result = addAlbumHandler($data, $db);
            $prev_page = '/exam/admin.php?add-album=1';
            break;
        case 'edit-album':
            $result = editAlbumHandler($_POST, $db);
            $prev_page = '/exam/admin.php?edit-album=1&id=' . $_POST['id'];
     }

    $params = '';
    if ($result['status'] == 'errors') {
        $params = '&status=errors';
        foreach ($result['errors'] as $key => $error) {
            foreach ($error as $key => $value) {
                $params .= '&' . $key . '=' . $value;
            }
        }
    }
    if ($result['status'] == 'success') {
        $params = '&status=success';
    }

    header('Location: ' . $prev_page . $params);
    exit;    
}
adminHandler();

function addImageHandler($data, $db) {
    $uploader = new \Classes\Uploader('gallery-image', '/../img/gallery/');

    $patterns = [
        'gallery-image' => 'image|require',
    ];

    $valid = new \Classes\Valid($data, $patterns);
    $errors = $valid->getResult();
    if (!empty($errors)) {
        return [
            'status' => 'errors',
            'errors' => $errors,
        ];
    }

    $tempImg = $uploader->upload()->getUploadedFileName();
    
    $img = '/gallery/' . $tempImg;
    
    $sqlData = [
        ':subtitle' => $data['gallery-subtitle'],
        ':thumbnail' => $img,
    ];

    $test = $db->query('INSERT INTO `gallery`( `subtitle`, `image`) VALUES (:subtitle, :thumbnail)', $sqlData);
    return [
        'status' => 'success'
    ];
}

function addAlbumHandler($data, $db) {
    
    $patterns = [
        'album-cover' => 'require|image',
        'album-name' => 'require',
        'album-content' => 'require',
    ];
    $valid = new \Classes\Valid($data, $patterns);
    $errors = $valid->getResult();
    if (!empty($errors)) {
        return [
            'status' => 'errors',
            'errors' => $errors,
        ];
    }

    $img = '';
    $uploader = new \Classes\Uploader('album-cover', '/../img/albums/');
    $tempImg = $uploader->upload()->getUploadedFileName();
    var_dump($tempImg);
    if($tempImg){
        $img = '/albums/' . $tempImg;
    }
    
    $sqlData = [
        ':title' => $data['album-name'],
        ':thumbnail' => $img,
        ':years' => $data['album-year'],
        ':record' => $data['album-content'],
    ];
    $db->query('INSERT INTO `albums`(`id`, `title`, `thumbnail`, `year`, `records`) VALUES (NULL, :title , :thumbnail , :years , :record )', $sqlData);
        
    return [
        'status' => 'success'
    ];
}

function editAlbumHandler($data, $db) {
    $patterns = [
        'album-title' => 'require',
        'album-thumbnail' => 'require',
        'album-records' => 'require',
    ];
    $valid = new \Classes\Valid($data, $patterns);
    $errors = $valid->getResult();
    if (!empty($errors)) {
        return [
            'status' => 'errors',
            'errors' => $errors,
        ];
    }
    $sqlData = [
        ':title' => $data['album-title'],
        ':thumbnail' => $data['album-thumbnail'],
        ':years' => $data['album-year'],
        ':records' => $data['album-records'],
        ':id' => $data['id'],
    ];
    
    $db->query('UPDATE `albums` SET `title`= :title ,`thumbnail`= :thumbnail ,`year`= :years ,`records`= :records WHERE `id` = :id', $sqlData);

    return [
        'status' => 'success'
    ];
}