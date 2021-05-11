<?php


class MarU2
{
    private $idRemedy;
    private $NOMBREPREDIO;
    private $NEMONICOEQUIPO;
    private $DIRECCIONPREDIO;
    private $TIPODEINSLACION;
    private $fecha;
    



    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAll()
    {
        try {

            $strSql = "SELECT * FROM maru2";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    
}
