<?php

require 'models/MarM2.php';



class MarM2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new MarM2;
        
        
    }

    public function index(){

        $MarM2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/MarM2/list.php';
    }

    
    

}