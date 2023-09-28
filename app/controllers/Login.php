<?php
class Login extends Controller{
    public function index ()
    {
        $data['judul'] = "Login";
        $data['css'] = "app/views/css/bootstrap.css";

        $this->Views('/base/header', $data);
        $this->Views('/login/index');
        $this->Views('/base/footer');
    }

    public function register ()
    {
        
    }
}