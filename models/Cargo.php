<?php

class Cargo
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
            $strSql = "SELECT * FROM cargo";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}