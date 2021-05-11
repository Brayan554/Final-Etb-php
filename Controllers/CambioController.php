<?php

require 'models/Cambio.php';
require 'models/Estado.php';

class CambioController
{
    private $model;
    private $estado;

    public function __construct()
    {   
        $this->model  = new Cambio;
        $this->estado = new Estado;
    }

    public function index(){
        
        $cambios = $this->model->getAll();
        $estados = $this->estado->getAll();
        require 'views/layout.php';
        require 'views/cambio/list.php';
    }

    public function save(){
        $this->model->newCambio($_REQUEST);
        header("Location: ?controller=cambio");
    }

    public function edit(){

			
		if (isset($_REQUEST['idTarea'])) {
			$id = $_REQUEST['idTarea'];
			$data = $this->model->getCambioById($id);       
            $estados     = $this->estado->getAll();
			
			require 'views/layout.php';
			require 'views/cambio/edit.php';
		} else {
			echo "Error";
		}
							
    }

    public function update(){
	
		if (isset($_POST)) {
		$this->model->editCambio($_POST);
		header("Location: ?controller=cambio");
		} else {
			echo "Error";
		}
		
    }

    public function delete(){
			
		$this->model->deleteCambio($_REQUEST);
		header("Location: ?controller=cambio");	
	}

}