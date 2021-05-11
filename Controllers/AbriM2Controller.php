<?php

require 'models/AbriM2.php';



class AbriM2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new AbriM2;
        
        
    }   

    public function index(){

        $AbriM2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/AbriM2/list.php';
    }

    
    

}