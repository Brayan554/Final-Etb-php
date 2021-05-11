<?php

require 'models/AbriM1.php';



class AbriM1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new AbriM1;
        
        
    }

    public function index(){

        $AbriM1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/AbriM1/list.php';
    }

    
    

}