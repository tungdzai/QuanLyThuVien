<?php
require_once './Controller/BaseController.php';
require_once './View/Auth/login.php';

class AuthController  extends BaseController
{
    public function login()
    {
        $this->view('Auth/login.php');

    }
    public function handleLogin(){
    }
}