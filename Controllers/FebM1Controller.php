<?php

require 'models/FebM1.php';



class FebM1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new FebM1;
        
        
    }

    public function index(){

        $FebM1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/FebM1/list.php';
    }

    
    

}