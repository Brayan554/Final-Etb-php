<?php

/**
 * 
 */
class Database extends PDO
{	
		private $driver = 'mysql';
		private $host   = 'localhost';
		private $dbname = 'etb';
		private $charset = 'utf8';
		private $user  = 'root';
		private $password = '';
	
	public function __construct()
	{
		try {
					parent::__construct("{$this->driver}:host={$this->host}; dbname={$this->dbname}; charset={$this->charset}" ,$this->user, $this->password);

					$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				} catch (PDOException $e)	 {
			echo "Conexion Fallida{$e->getMessage()}";	
		}	
	}

	public function  select($strSql, $arrayData = array(), 
		$fetchMode = PDO:: FETCH_OBJ)
	{
		//prepara el query
		$query = $this->prepare($strSql);
		//asigna parametros al query si llega como una array 
		foreach ($arrayData as $key => $value) {
			$query->bindParam(":$key", $value);	
		}
		//valida si se ejecuta el query
		if (!$query->execute()) {
			//Error
			echo "Error, La consulta no se realizo ";

		}else{
			//Si no hay error retorna el objeto del query
			return $query->fetchAll($fetchMode);
		}

	}

	public function insert($table, $data){

			try {
						krsort($data);
						unset($data['controller'] , $data['method']);

						$fielNames = implode('`, `' , array_keys($data));
						$fielValues = ':' . implode(', :', array_keys($data));
						$strSql = $this->prepare("INSERT INTO $table (`$fielNames`) VALUES ($fielValues)");

						foreach ($data as $key => $value) {
							$strSql->bindValue(":$key", $value);
						}
						$strSql->execute();
					} catch (PDOException $e) {
								die($e->getMessage());
			    }
	}

	public function  update($table, $data, $where)
	{
		try {
				//METODO PARA ORDENAR
				ksort($data);
						
				$failDetails = null;

				foreach ($data as $key => $value) {
					$failDetails .= "`$key` =:$key,";
				}
				$failDetails = rtrim($failDetails, ',');
				$strSql = $this->prepare(" UPDATE $table SET $failDetails WHERE $where");

				foreach ($data as $key => $value) {
					$strSql->bindValue(":$key", $value);
				}
			
				$strSql->execute();
			} catch (PDOException $e) {
				die($e->getMessage());
			}
	}

	public function  delete($table, $where)
	{
		try {
		return $this->exec("DELETE FROM $table WHERE $where");
			
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


}