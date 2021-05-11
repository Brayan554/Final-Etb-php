<?php

require 'models/EneU1.php';



class EneU1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new EneU1;
        
        
    }

    public function index(){

        $EneU1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/EneU1/list.php';
    }

    
    

}