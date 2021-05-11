<?php

require 'models/MayM2.php';



class MayM2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new MayM2;
        
        
    }

    public function index(){

        $MayM2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/MayM2/list.php';
    }

    
    

}