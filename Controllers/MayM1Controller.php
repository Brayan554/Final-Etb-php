<?php

require 'models/MayM1.php';



class MayM1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new MayM1;
        
        
    }

    public function index(){

        $MayM1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/MayM1/list.php';
    }

    
    

}