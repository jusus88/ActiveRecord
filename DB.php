<?php 
class DB 
{
	public $conexion;
	function __construct()
	{
		$this->conexion=new mysqli("localhost","root","12345678","alumnos");
		if($this->conexion->connect_errno)
		{
			echo $this->conexion->connect_error;
		}

	}
}


 ?>