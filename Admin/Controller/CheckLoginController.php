<?php
require_once './Controller/BaseController.php';
class CheckLoginController extends BaseController{
    public function __construct()
    {
        if ($this->checkLogin()){
            $this->redirect('index.php?mod=auth&act=login');
        }
    }
    public function checkLogin(){
        if (isset($_SESSION["auth"])){
            return true;
        }
        return false;
    }
}