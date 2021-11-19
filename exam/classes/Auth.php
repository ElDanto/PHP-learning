<?php
// require __DIR__ . '/DB.php';
namespace Classes;

class Auth 
{
    public function login($login, $pass)
    {   
        $db = new DB();

        $data = [
            ':user' => $login,
        ];

        $user = $db->query('SELECT * FROM `users` WHERE `login` = :user', $data);
        $user = $user[0];

        session_start();
        // $user = [
        //     'id' => 1,
        //     'login' => 'admin',
        //     'password' => '$2y$10$zD9Py3oPMozh14uwsIoA.O/fKPn3wZTwrrUcnVQwNlHd7Tbu2gNx2'
        // ];
        // $test = password_hash(123456, PASSWORD_BCRYPT );
        // var_dump($test);
        // die();
        // $post_login = !empty($_POST['login']) ?  $_POST['login'] : false;
        // $post_password = !empty($_POST['password']) ?  $_POST['password'] : false;

        if ( !$login || !$pass ) {
            header("Location: /exam/admin/login.php");
            exit;
        }

        if(password_verify($pass, $user->password)) {
            $_SESSION['user'] = $user->login;
            $_SESSION['id'] = $user->id;

            header("Location: /exam/index.php");
            exit;
        } else { 
            header("Location: /exam/admin/register.php");
            exit;
        }
        return $this;
    }

    public function checkAdmin()
    {
        session_start();
        if($_SESSION['id'] != 1){
            header("Location: /exam/admin/login.php");    
            exit; 
        }
        return $this;
    }

    public function register($login, $pass, $rePass)
    {
        if($pass == $rePass && !empty($login) && !empty($pass)){
            $heshPass = password_hash($pass, PASSWORD_BCRYPT );
            $data = [
                ':username' => $login,
                ':pass'     => $heshPass,
            ];
            $db = new DB();
            $test = $db->query('INSERT INTO `users`(`id`, `login`, `password`) VALUES (NULL, :username , :pass)', $data);
            $this->login($login, $pass);
        }else{
            header("Location: /exam/admin/register.php");    
            exit;  
        }
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        session_destroy();
        header("Location: /exam/admin/login.php");    
        exit; 
        return $this;
    }
}
