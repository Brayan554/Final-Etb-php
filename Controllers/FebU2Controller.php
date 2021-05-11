<?php

require 'models/FebU2.php';



class FebU2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new FebU2;
        
        
    }

    public function index(){

        $FebU2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/FebU2/list.php';
    }

    
    

}