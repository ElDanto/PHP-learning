<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Second lesson</title>
</head>

<body>
    <?php 
    // 0 = '0' = '' = false - Транзитивность
    require __DIR__ . '/functions.php';
    
    $one = 1;
    $zero = 0;
    ?>
    <h1>First task</h1>
    <div class="first-task">
        <p>Logical conjunction (AND)</p>
        <table class="iksweb">
            <tbody>
                <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>a && b</td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><?php echo logic_op_res($zero, $zero, 'and'); ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><?php echo logic_op_res($zero, $one, 'and'); ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><?php echo logic_op_res($one, $zero, 'and'); ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><?php echo logic_op_res($one, $one, 'and'); ?></td>
                </tr>
            </tbody>
        </table>

        <p>Logical disjunction (OR)</p>
        <table class="iksweb">
            <tbody>
                <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>a || b</td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><?php echo logic_op_res($zero, $zero, 'or'); ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><?php echo logic_op_res($zero, $one, 'or'); ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><?php echo logic_op_res($one, $zero, 'or'); ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><?php echo logic_op_res($one, $one, 'or'); ?></td>
                </tr>
            </tbody>
        </table>

        <p>Exclusive disjunction (XOR)</p>
        <table class="iksweb">
            <tbody>
                <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>a xor b</td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><?php echo logic_op_res($zero, $zero, 'xor'); ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><?php echo logic_op_res($zero, $one, 'xor'); ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><?php echo logic_op_res($one, $zero, 'xor'); ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><?php echo logic_op_res($one, $one, 'xor'); ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <h1>Second task</h1>
    <div class="second-task">
        <div class="rendered-form">
            <div class="form-group">
                <label for="number-1628720001516" class="label">X<sup>2</sup></label>
                <input type="number" class="form-control" id="first-number">
            </div>
            <div class="form-group">
                <label for="number-1628720002108" class="label">X</label>
                <input type="number" class="form-control" id="second-number">
            </div>
            <div class="form-group">
                <label class="label">Third Number</label>
                <input type="number" class="form-control" id="third-number">
            </div>
            <div class="form-group">
                <button class="btn" id="submit-btn" action="submit-form">Send</button>
            </div>
            <div class="form-group">
                <p id="result"></p>
            </div>
        </div>
    </div>

    <h1>Third task</h1>
    <div class="third-task">

        <?php 
        // var_dump(include(__DIR__ . '/functions.php')); == int(1);
        // var_dump(include(__DIR__ . '/function.php')); == bool(false);
        //Обработка возвращаемых значений: оператор include возвращает значение FALSE при ошибке и выдаёт предупреждение. Успешные включения, пока это не переопределено во включаемом файле, возвращают значение 1.
        ?>

    </div>
    <h1>Bonus task</h1>
    <div class="bonus-task">
        <?php 
        echo determinant_of_name('Никита');
        ?>
    </div>

    <?php 
    // $action = !empty($_POST['action']) ? $_POST['action'] : false;
    // if($action == 'submit_form'){
    //     submit_form();
    //     die;
    // }
    // function submit_form(){
    //     $first_input = $_POST['first_input'];
    //     echo $first_input;
    //     die;
    // }
    ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <script src="script.js"></script>
</body>

</html>