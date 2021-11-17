<?php 
    require __DIR__ . '/templates/header.php'; 
    require __DIR__ . '/classes/DB.php';

    $db = new DB();
    $image = $db->query('SELECT * FROM `gallery` WHERE `id` = :id', [':id' => $_GET['id']]);
    $image = $image[0];
?>
    <div class="stage" style="text-align: center;">
        <img src="<?php echo 'img/'. $image->image; ?>" alt="" style="width: 50%; height: auto; border: 0;">
        <h3><?php echo $image->subtitle; ?></h3>
    </div>
<?php require __DIR__ . '/templates/footer.php'; ?>