<?php

require 'models/JunU1.php';



class JunU1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new JunU1;
        
        
    }

    public function index(){

        $JunU1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/JunU1/list.php';
    }

    
    

}