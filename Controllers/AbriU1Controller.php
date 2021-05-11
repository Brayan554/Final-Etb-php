<?php

require 'models/AbrilU1.php';



class AbriU1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model = new AbrilU1;
        
        
    }   

    public function index(){

        $AbriU1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/AbriU1/list.php';
    }

    
    

}