<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Form calculate</title>
</head>
<body>
    <?php
    $result = '';
    $options = ['+', '-', '*', '/', '^', '%'];
    if( isset( $_GET['first-val'] ) ){
        $calc_data = calculator();
        $f_val = $calc_data['f_val'];
        $s_val = $calc_data['s_val'];
        $oper = $calc_data['oper'];
        $result = $calc_data['result'];
    }
    function calculator(){
        $first_val = (int)$_GET['first-val'];
        $second_val = (int)$_GET['second-val'];
        $oper = $_GET['operation'];
        $result = 0;
        switch($oper){
            case '+':
                $result = $first_val + $second_val;
                break;
            case '-':
                $result = $first_val - $second_val;
                break;
            case '*':
                $result = $first_val * $second_val;
                break;
            case '/':
                if ($second_val === 0){
                    $result = 'На ноль делить нельзя';
                } else {
                    $result = $first_val / $second_val;
                }
                break;
            case '^':
                $result = $first_val ** $second_val;
                break;
            case '%':
                $result =  ($first_val * $second_val)/100;
                break;  
        }
        $calc_data  = [
            'f_val'     =>   $first_val,
            's_val'     =>   $second_val,
            'result'    =>   $result,
            'oper'    =>   $oper,
        ];
        return $calc_data;
    }
    ?>
    <form action="form.php" method="get">
        <div class="block">
            <label for="first-val" class="title">First value</label>
            <input type="number" name="first-val" id="first-val" class="input" value="<?php echo $f_val;?>">
        </div>
        <div class="block">
            <label for="operation" class="title">Operation</label>
            <select name="operation" id="operation" class="input">
                <?php foreach($options as $value): ?>
                    <?php if($oper === $value):?>
                        <option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="block">
            <label for="second-val" class="title">Second value</label>
            <input type="number" name="second-val" id="second-val" class="input" value="<?php echo $s_val; ?>">
        </div>
        
        <div class="block">
            <input type="submit" value="Result" >
            <span class="result"><?php echo $result;?></span>
        </div>
    </form> 
</body>
</html>