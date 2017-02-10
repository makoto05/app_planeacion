<?php
//include("db/db.php");
class personas_model{
 private $db;
   /* private $db;
    private $personas;*/
	
/*	private $host = "localhost";
	private $usuario = "root";
	private $clave = "anime05";
	private $db2 = "mvc";
	private $conn;*/
	
	
 
    public function __construct(){
       /* $this->db=Conectar::conexion();
        $this->personas=array();*/
		//$this->conn = mysqli_connect($this->host, $this->usuario, $this->clave, $this->db2);
		/*if(mysqli_connect_error()){
			printf("Error en la conexion: %d",mysqli_connect_error());
			exit;
		} else {
			//print "Conexion exitosa<br>";	
		}*/
		$this->db=Conectar::conexion();
		if($this->db){
		echo(" ya todo bien ok");
		$x=$_POST['nombre'];
		echo $x;
		}
		else
		echo(" Nou");
		
    }
    public function get_personas(){
        //$consulta=$this->db->query("select * from usuario;");
       /* while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }*/
		$personas=array();
		$consulta=mysqli_query($this->conn, "select * from usuario");
		/*while($obj = mysqli_fetch_object($consulta)){
		//array_push($personas, $obj);
		echo $obj->nombre;
	}*/ while($filas=$consulta->fetch_assoc()){
           // $personas[]=$filas;
			//echo $filas["nombre"];
        }
        return $filas;
    }
	 
	 public function set_personas(){
	 $query="insert into sesion ( username, password, perfil, email) values ('$_POST[nombre]','$_POST[pwd]','$_POST[radio1]','$_POST[email]')";
	 //$query="insert into sesion ( username) values ('$_POST[nombre]')";
	 $resultado = pg_query($this->db, $query);
	 }
}
?>