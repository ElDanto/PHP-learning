<?php
    require __DIR__ . '/../autoload.php';
// include_once __DIR__ . '/../classes/Auth.php';
    $auth = new \Classes\Auth();

    if(isset($_POST['login'])){
        $login = !empty($_POST['login']) ?  $_POST['login'] : false;
        $password = !empty($_POST['password']) ?  $_POST['password'] : false;
        $auth->login($login, $password)->checkAdmin();
    }
    if(isset($_POST['login-reg'])){
        $login = !empty($_POST['login-reg']) ?  $_POST['login-reg'] : false;
        $password = !empty($_POST['password']) ?  $_POST['password'] : false;
        $rePassword = !empty($_POST['re-password']) ?  $_POST['re-password'] : false;
        $auth->register($login, $password, $rePassword);
    }
    if(isset($_GET['logout'])){
        $auth->logout();
    } 
?>
<?php
// session_start();
// $login = 'admin';
// $pass = 'e10adc3949ba59abbe56e057f20f883e';
// $user = [
//     'id' => 1,
//     'login' => 'admin',
//     'password' => '$2y$10$zD9Py3oPMozh14uwsIoA.O/fKPn3wZTwrrUcnVQwNlHd7Tbu2gNx2'
// ];
// // $test = password_hash(123456, PASSWORD_BCRYPT );
// // var_dump($test);
// // die();
// $post_login = !empty($_POST['login']) ?  $_POST['login'] : false;
// $post_password = !empty($_POST['password']) ?  $_POST['password'] : false;

// if (!$post_login || !$post_password) {
//     echo "Логин или пасворд не заполнены.";
//     die();
// }

// if(password_verify($post_password, $user['password'])) {
//     $_SESSION['admin'] = 'admin';
//     header("Location: /exam/admin.php");
//     exit;
// } else { 
//     echo '<p>Логин или пароль неверны!</p>';
// }
?>  