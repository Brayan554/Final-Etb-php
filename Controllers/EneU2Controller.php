<?php

require 'models/EneU2.php';



class EneU2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new EneU2;
        
        
    }

    public function index(){

        $EneU2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/EneU2/list.php';
    }

    
    

}