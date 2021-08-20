<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
<?php 
    $images = include __DIR__ . '/array-images.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        /** Alternative */
        // $key = array_search($id, array_column($images, 'id'));
        // echo $images[$key]['url'];
        foreach($images as $key => $item){
            if($item['id'] == $id){
?>
                <img src="<?php echo $item['url']; ?>" alt="">
<?php            
                break;
            } 
        }
    }
?>
</body>
</html>


