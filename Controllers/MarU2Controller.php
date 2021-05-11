<?php

require 'models/MarU2.php';



class MarU2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new MarU2;
        
        
    }

    public function index(){

        $MarU2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/MarU2/list.php';
    }

    
    

}