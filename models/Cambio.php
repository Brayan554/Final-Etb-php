<?php

class Cambio
{
    private $idCambio;
    private $servicioCambio;
    private $resumenCambio;
    private $prioridad;
    private $idEstado;
    private $pdo;


    public function __construct()
    {
        try{
                $this->pdo = new Database;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAll(){
        try{
            $strSql = "SELECT c.*, s.nombreEstado as status from cambio c inner join estado s on s.idEstado = c.idEstado ORDER BY idCambio";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newCambio($data){
        try{
            $data['idEstado'] = 4;
            $this->pdo->insert('cambio', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getCambioById($id){
		try {
			 
		$strSql = "SELECT * FROM cambio WHERE idCambio = :idCambio";
			 $arrayData = ['idCambio' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}
    public function editCambio($data){

		try {
			  $strWhere='idCambio='.$data['idCambio'];
				$this->pdo->update('cambio', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

    public function deleteCambio($data){

		try {
			$strWhere = 'idCambio = ' .$data['idCambio'];
			$this->pdo->delete('cambio', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

    
}