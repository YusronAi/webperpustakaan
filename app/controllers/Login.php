<?php
session_start();

class Login extends Controller{
    public function index ()
    {
        $data['judul'] = "Login";
        $data['css'] = "app/views/css/bootstrap.css";

        $this->Views('/base/header', $data);
        $this->Views('/login/index');
        $this->Views('/base/footer');

        if ($_POST) {
           $data['user'] =  $this->model('user_model')->log($_POST);
           if ($data['user']['password'] === $_POST['password']) {
            $_SESSION['login'] = true;
            header('location: ' . Config::BASEURL . '/dashboard');
            exit;
           }
        }

        if ($_SESSION['login']){
            header('location: ' . Config::BASEURL . '/dashboard');
            exit;
        }
    }

    public function register ()
    {
        
    }

    public function logout (){
        unset($_SESSION['login']);
        $_SESSION['login'] = [];
        session_destroy();

        header('location: '. Config::BASEURL . '/login');
        exit;
    }
}