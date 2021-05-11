<?php


class Tarea
{
    private $idTarea;
    private $solicitudTarea;
    private $descripcionTarea;
    private $idEstado;
    private $idCambio;
    private $idIncidente;




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

            $strSql = "SELECT t.*, s.nombreEstado as status , c.servicioCambio as servicioCambio, i.descripcionIncidentes as descripcionIncidentes FROM tareas t inner join estado s on s.idEstado = t.idEstado INNER JOIN cambio c on c.idCambio = t.idCambio inner join incidentes i on i.idIncidente = t.idIncidente ORDER BY idTarea";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function newTarea($data)
    {

        try {
            $data['idEstado'] = 1;
            $this->pdo->insert('tareas', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getTareaById($id)
    {
        try {

            $strSql = "SELECT * FROM tareas WHERE idTarea = :idTarea";
            $arrayData = ['idTarea' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editTarea($data)
    {

        try {

            $strWhere = 'idTarea=' . $data['idTarea'];
            
            
            $this->pdo->update('tareas', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteTarea($data)
    {

        try {
            $strWhere = 'idTarea= ' . $data['idTarea'];
            $this->pdo->delete('tareas', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
