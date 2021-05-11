<?php

require 'models/FebM2.php';



class FebM2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new FebM2;
        
        
    }

    public function index(){

        $FebM2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/FebM2/list.php';
    }

    
    

}