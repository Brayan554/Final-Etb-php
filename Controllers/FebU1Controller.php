<?php

require 'models/FebU1.php';



class FebU1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new FebU1;
        
        
    }

    public function index(){

        $FebU1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/FebU1/list.php';
    }

    
    

}