 <?php


class user{

private $idUsuario;
private $nombresUsuario;
private $apellidosUsuario;
private $correoUsuario;
private $contrasenaUsuario;
private $idEstado;
private $idCargo;




    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAll(){

        try{

        $strSql = "SELECT u.*, s.nombreEstado as status, c.nombreCargo as cargo from usuario u INNER JOIN estado s on s.idEstado = u.idEstado INNER JOIN cargo c on c.idCargo = u.idCargo ORDER BY idUsuario";
        $query  = $this->pdo->Select($strSql);
        return $query;

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newUser($data)
    {

        try {
            $data['idEstado'] = 5;
            $this->pdo->insert('usuario', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getUserById($id)
    {
        try {

            $strSql = "SELECT * FROM usuario WHERE idUsuario = :idUsuario";
            $arrayData = ['idUsuario' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editStatus($data){
		try{
			$strWhere = 'idUsuario = '. $data['idUsuario'];
			$this->pdo->update('usuario', $data, $strWhere);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

    public function editUser($data)
    {

        try {

            $strWhere = 'idUsuario=' . $data['idUsuario'];
            
            
            $this->pdo->update('usuario', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteUser($data)
    {

        try {
            $strWhere = 'idUsuario= ' . $data['idUsuario'];
            $this->pdo->delete('usuario', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }



}
 	


