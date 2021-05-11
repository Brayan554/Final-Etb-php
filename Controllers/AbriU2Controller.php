<?php

require 'models/AbrilU2.php';



class AbriU2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new AbriU2;
        
        
    }

    public function index(){

        $AbriU2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/AbriU2/list.php';
    }

    
    

}