<?php


class Estado
{
    private $idEstado;
    private $nombreEstado;
    



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

            $strSql = "SELECT * FROM ESTADO";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function newEstado($data)
    {

        try {
            
            $this->pdo->insert('estado', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getTareaById($id)
    {
        try {

            $strSql = "SELECT * FROM estado WHERE idEstado = :idEstado";
            $arrayData = ['idEstado' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editStatus($data)
    {

        try {

            $strWhere = 'idEstado=' . $data['idEstado'];
            
            
            $this->pdo->update('estado', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteStatus($data)
    {

        try {
            $strWhere = 'idEstado= ' . $data['idEstado'];
            $this->pdo->delete('estado', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
