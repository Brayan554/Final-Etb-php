<?php

require 'models/EneM2.php';



class EneM2Controller
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new EneM2;
        
        
    }

    public function index(){

        $EneM2s      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/EneM2/list.php';
    }

    
    

}