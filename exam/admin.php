<?php 
    require_once  __DIR__ . '/classes/Auth.php';
    require __DIR__ . '/classes/View.php';
    require __DIR__ . '/classes/Models/Albums.php';

    $auth = new Auth;
    $auth->checkAdmin();

    $view = new View;

    $db = new DB();

    require __DIR__ . '/templates/header.php';

    if(empty($_GET)){
        $view->display(__DIR__ . '/templates/admin-templates/index.php');
        // include_once __DIR__ . '/templates/admin-templates/index.php';
    }

    if(isset($_GET['add-album'])){
        include_once __DIR__ . '/templates/admin-templates/albums/add-albums.php';
    }
    if(isset($_GET['edit-albums'])){
        $sqlArray = $db->query('SELECT * FROM `albums` ORDER BY `year`DESC');

        $albumsData = new Albums($sqlArray);
        $albums = $albumsData->getData();

        $view->assign('albums', $albums)->display(__DIR__ . '/templates/admin-templates/albums/edit-albums.php');

        // include_once __DIR__ . '/templates/admin-templates/albums/edit-albums.php';
    }

    if(isset($_GET['edit-album'])){

        $sqlArray = $db->query('SELECT * FROM `albums` WHERE `id` = :id', [':id' => $_GET['id']]);

        $albumData = new Albums($sqlArray);

        $album = $albumData->getData();
        $album = $album[0];

        $view->assign('album', $album)->display(__DIR__ . '/templates/admin-templates/albums/edit-album.php');

        // include_once __DIR__ . '/templates/admin-templates/albums/edit-album.php';
    }

    if(isset($_GET['add-image'])){
        $view->display(__DIR__ . '/templates/admin-templates/gallery/add-image.php');
        // include_once __DIR__ . '/templates/admin-templates/gallery/add-image.php';
    }

    if(isset($_GET['logout'])){
        $auth->logout();
    } 

    require __DIR__ . '/templates/footer.php';


// /admin
//     - /templates/
//         - /gallery/
//             - edit.php
//             - add.php
//         - /albums/
//             - edit.php
//             - add.php
//         - index.php
//     - 