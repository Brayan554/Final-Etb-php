<?php

require 'models/Estado.php';



class EstadoController
{
    private $model;
    

    public function __construct()
    {
        $this->model      = new Estado;
        
        
    }

    public function index(){

        $status      = $this->model->getAll();
        
        require 'views/layout.php';
        require 'views/status/list.php';
    }

    
    public function save(){
        $this->model->newEstado($_REQUEST);
        header("Location: ?controller=estado");
    }

    public function edit(){

			
		if (isset($_REQUEST['idEstado'])) {
			$id = $_REQUEST['idEstado'];
			$data = $this->model->getTareaById($id);
     	
			require 'views/layout.php';
			require 'views/status/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editStatus($_POST);
		header("Location: ?controller=estado");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteStatus($_REQUEST);
		header("Location: ?controller=estado");	
	}

}