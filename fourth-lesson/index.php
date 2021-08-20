<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
</head>
<body>
    <?php
        $posts = [];
        $f = fopen(__DIR__ . '/guestbook.txt', 'r');
        while(!feof($f)){
            $str = fgets($f);
            $posts[] = $str;
        }
        fclose($f);
    ?>
    <h1>Guest Book</h1>
    <div class="guestbook">
        <?php foreach($posts as $key => $item):?>
            <p><?php echo $item; ?></p>
        <?php endforeach; ?>
    </div>
    <form action="/fourth-lesson/add-file.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <label for="reviewing">Reviewing</label>
        <textarea name="reviewing" id="" cols="30" rows="10"></textarea>
        <label for="rating">Rating</label>
        <input type="number" name="rating" id="">
        <input type="submit" value="Send">
    </form>
    <form action="/fourth-lesson/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myimg">
        <input type="submit" value="Send">
    </form>
</body>
</html>