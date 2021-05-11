<?php

require 'models/MarM1.php';



class MarM1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new MarM1;
        
        
    }

    public function index(){

        $MarM1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/MarM1/list.php';
    }

    
    

}