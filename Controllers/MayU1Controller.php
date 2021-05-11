<?php

require 'models/MayU1.php';



class MayU1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new MayU1;
        
        
    }

    public function index(){

        $MayU1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/MayU1/list.php';
    }

    
    

}