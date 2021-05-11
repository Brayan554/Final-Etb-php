<?php


class AbrilU1
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

            $strSql = "SELECT * FROM abru1";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}