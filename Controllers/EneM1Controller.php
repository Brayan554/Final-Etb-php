<?php

require 'models/EneM1.php';



class EneM1Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new EneM1;
        
        
    }

    public function index(){

        $EneM1s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/EneM1/list.php';
    }

    
    

}