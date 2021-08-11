<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Local</title>
</head>
<body>
    <?php 
        $x = 2; 

        echo $x; // == 2;

        echo 9223372036854775808; // == 9.2233720368548E+18;

        var_dump('Привет'); // == string(12) "Привет";

        var_dump(3 / 1); // == int(3);

        var_dump(1 / 3); // == float(0.3333333333333333);

        var_dump('20cats' + 40); // Warning: A non-numeric value encountered in ../../..\index.php on line 23; == int(60);

        var_dump(18 % 4); // == int(2); 
    ?>
</body>
</html>