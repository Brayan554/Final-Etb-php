<?php

class Incidencia
{
    private $idIncidente;
    private $descripcionIncidentes;
    private $prioridad;
    private $pdo;

    public function __construct()
    {
        try{
            $this->pdo = new Database;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAll(){
        try{
            $strSql = "SELECT * FROM incidentes";
            $query  = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


}