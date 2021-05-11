<?php

require 'models/Tarea.php';
require 'models/Cambio.php';
require 'models/Incidencia.php';
require 'models/Estado.php';


class TareaController
{
    private $model;
    private $cambio;
    private $incidencia;
    private $estado;

    public function __construct()
    {
        $this->model      = new Tarea;
        $this->cambio     = new Cambio;
        $this->incidencia = new Incidencia;
        $this->estado     = new Estado;
        
    }

    public function index(){

        $tareas      = $this->model->getAll();
        $cambios     = $this->cambio->getAll();
        $incidencias = $this->incidencia->getAll();
        $estados     = $this->estado->getAll();
        require 'views/layout.php';
        require 'views/tarea/list.php';
    }

    public function new(){

        require 'views/tarea/new.php';
        
    }

    public function save(){
        $this->model->newTarea($_REQUEST);
        header("Location: ?controller=tarea");
    }

    public function edit(){

			
		if (isset($_REQUEST['idTarea'])) {
			$id = $_REQUEST['idTarea'];
			$data = $this->model->getTareaById($id);
      $cambios = $this->cambio->getAll();
      $incidencias = $this->incidencia->getAll(); 
      $estados     = $this->estado->getAll();
			
			require 'views/layout2.php';
			require 'views/tarea/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editTarea($_POST);
		header("Location: ?controller=tarea");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteTarea($_REQUEST);
		header("Location: ?controller=tarea");	
	}

}