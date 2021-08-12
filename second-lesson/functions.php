<?php
function logic_op_res($a, $b, $name_op) {
    switch ($name_op) {
        case 'and':
            $result = $a && $b ;
            if ($result) {
                return '1';
            } else {
                return '0';
            }
            break;
        case 'or':
            $result = $a || $b;
            if ($result) {
                return '1';
            } else {
                return '0';
            }
            break ;
        case 'xor':
            $result = ($a xor $b);
            if ($result) {
                return '1';
            } else {
                return '0';
            }
            break;
    }
}
function determinant_of_name($name) {
    $a = str_ends_with($name,'а');
    $ya = str_ends_with($name,'я');
    $soft_char = str_ends_with($name,'ь');
    if ( ( $a || $ya || $soft_char ) && !( $name == 'Никита' || $name == 'Женя' || $name == 'Саша' ) ) {
        $result = 'Женское имя';
    } elseif ( !( $name == 'Женя' || $name == 'Саша' ) ){
        $result = 'Мужское имя';
    } else {
        $result = 'Имя неопределено';
    }
    return $result;
}