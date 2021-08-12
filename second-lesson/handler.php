<?php 
$action = !empty($_POST['action']) ? $_POST['action'] : false;
// switch ($action) {
//     case 'submit_form':
//         submit_form();
//         break;
// }
if($action == 'submit_form'){
    submit_form();
    die;
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