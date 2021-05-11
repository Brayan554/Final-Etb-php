<?php

require 'models/Login.php';


class LoginController
{
    private $model;

    public function __construct()
    {
        $this->model = new Login;
    }

    public function index(){
        if (isset($_SESSION['user']))
        {
            header('Location: ?controller=tarea');
            
        }else{

            require 'views/login.php';
        }

    }

    public function login(){
        $validateUser = $this->model->validateUser($_POST);

        if($validateUser === true){

            header('Location: ?controller=tarea');
        }else{

            $error = [
                        'errorMessage'  => $validateUser,
                        'correoUsuario' => $_POST['correoUsuario']
                  
                     ];

                     require 'views/login.php';
        }
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) 
			session_destroy();

			header('Location: ?controller=login');

        
    }



}