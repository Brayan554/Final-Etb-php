<?php

require 'models/MarU1.php';



class MarU1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new MarU1;
        
        
    }

    public function index(){

        $MarU1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/MarU1/list.php';
    }

    
    

}