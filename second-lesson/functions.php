<?php

function logic_op_res($a, $b, $name_op) {
    switch ($name_op) {
        case 'and':
            $result = $a && $b ;
            break;
        case 'or':
            $result = $a || $b;
            break ;
        case 'xor':
            $result = ($a xor $b);
            break;
    }
    return (int) $result;
}
/**
 * AJAX
 */
$action = !empty($_POST['action']) ? $_POST['action'] : false;
switch ($action) {
    case 'submit_form':
        submit_form();
        break;
    case 'get_sex':
        determinant_of_name();
        break;
}
function submit_form(){
    $a = $_POST['first_input'];
    $b = $_POST['second_input'];
    $c = $_POST['third_input'];
    $disc = (($b ** 2) - 4*$a*$c);
    if ($disc < 0) {
       $result = "Вещественных корней нет";
    } elseif ($disc == 0) {
        $result = [];
        $result['first'] = ( ( (-1) * $b ) / 2 * $a );
    } else {
        $x1 = ( ( (  (-1) * $b ) + sqrt($disc) ) / 2 * $a );
        $x2 = ( ( (  (-1) * $b ) - sqrt($disc) ) / 2 * $a );
        $result = [];
        $result['first'] = $x1;
        $result['second'] = $x2;
    }
    echo json_encode($result);
    die;
}

function determinant_of_name() {
    $name = $_POST['name'];
    $name = preg_replace('/\s+/', '', $name);
    $a = str_ends_with($name,'а');
    $ya = str_ends_with($name,'я');
    $soft_char = str_ends_with($name,'ь');
    if ( ( $a || $ya || $soft_char ) && !($name == 'Савва' || $name == 'Фома'  || $name == 'Добрыня' || $name == 'Данила' || $name == 'Илья' || $name == 'Аникита' || $name == 'Лука' || $name == 'Кузьма' || $name == 'Игорь' || $name == 'Никита' || $name == 'Израиль' || $name == 'Камиль' || $name == 'Лазарь' || $name == 'Марсель' || $name == 'Мигель' || $name == 'Эмиль' || $name == 'Шамиль' || $name == 'Цезарь' || $name == 'Фидель' || $name == 'Рамиль' || $name == 'Равиль' || $name == 'Олесь' || $name == 'Наиль' || $name == 'Николя' || $name == 'Женя' || $name == 'Саша') ) {
        $result = 'Женское имя';
    } elseif ( !( $name == 'Женя' || $name == 'Саша' ) ){
        $result = 'Мужское имя';
    } else {
        $result = null;
    }
    echo $result;
    return $result;
}
// assert('Женское имя' === determinant_of_name('Мария')); == true
// assert('Женское имя' === determinant_of_name('Инга')); == true
// assert('Мужское имя' === determinant_of_name('Никита')); == true
// assert('Мужское имя' === determinant_of_name('Игорь')); == true
// assert('Женское имя' === determinant_of_name('Антон')); == FATAL ERROR !!! Uncaught AssertionError
