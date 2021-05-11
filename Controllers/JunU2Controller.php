<?php

require 'models/JunU2.php';



class JunU2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new JunU2;
        
        
    }

    public function index(){

        $JunU2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/JunU2/list.php';
    }

    
    

}