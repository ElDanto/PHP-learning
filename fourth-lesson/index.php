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
            $string = fgets($f);
            $posts[] = $string;
        }
        fclose($f);
    ?>
    <h1>Guest Book</h1>
    <style type="text/css">
        .guestbook{
            margin-left: 38%;
        }
        table{
            width: 300px; /* Ширина таблицы */
            border-collapse: collapse; /* Убираем двойные линии между ячейками */

        }
        td, th {
            padding: 3px; /* Поля вокруг содержимого таблицы */
            border: 1px solid black; /* Параметры рамки */
        }
        th {
            background: #b0e0e6; /* Цвет фона */
        }
        .field,
        .field label,
        .field input,
        .field textarea{
            display: block;
            font-size: 1.2em;
            width: 100%;
        }
        .fields {
            text-align: center;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }
        /* .field{
            display: inline-block;
        } */
        form {      
            text-align: center;
            margin-top: 50px;
            padding: 10px;
        }
        form .fields input,
        form .fields textarea{
            /* width: 20%; */
        }
        input[type="submit"] {
            display: block;
            margin-top: 20px;
            padding: 10px;
            font-size: 1.2em;
            background: #4be4b3;
            border: 2px solid #047d58;
            border-radius: 5px;
        }
    </style>

     
    <div class="guestbook">
        <table>
            <tr>
                <th>Name</th>
                <th>Reviewing</th>
                <th>Rating</th>
            </tr>
        <?php foreach($posts as $item):?>
            <tr>
                <?php $arr_str = explode('|', $item);?>
                <?php
                    $name = isset($arr_str[0]) ? $arr_str[0]: 'undefined';
                    $reviewing = isset($arr_str[1]) ? $arr_str[1]: 'undefined';
                    $rating = isset($arr_str[2]) ? $arr_str[2]: 'undefined';
                ?>
                <td><?php echo $name; ?></td>
                <td><?php echo $reviewing; ?></td>
                <td><?php echo $rating; ?></td>
            </tr> 
        <?php endforeach; ?>   
        </table>
    </div>
    <form action="/fourth-lesson/add-file.php" method="post">
        <div class="fields">
            <div class="field">
                <label for="name">Name</label>
                <input type="text" name="name" id="">
            </div>
            <div class="field">
                <label for="reviewing">Reviewing</label>
                <textarea name="reviewing" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="field">
                <label for="rating">Rating</label>
                <input type="number" name="rating" id="">
            </div>
            <div class="field">
                <input type="submit" value="Send">
            </div>
        </div>
    </form>
    <a href="/fourth-lesson/gallery.php">Gallery</a>
</body>
</html>