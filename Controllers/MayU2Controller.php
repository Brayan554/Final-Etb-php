<?php

require 'models/MayU2.php';



class MayU2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new MayU2;
        
        
    }

    public function index(){

        $MayU2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/MayU2/list.php';
    }

    
    

}