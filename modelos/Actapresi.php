<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Actapresi
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($num_acta,$observa,$presi1,$presi2,$presi3,$presi4,$presi5,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi12,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,$blanco,$nulo,$impugnado,$total_presi)
	{
		$sql="INSERT INTO actapresi (num_acta,observa,tipo_acta,presi1,presi2,presi3,presi4,presi5,presi6,presi7,presi8,presi9,presi10,presi11,presi12,presi13,presi14,presi15,presi16,presi17,presi18,blanco,nulo,impugnado,total_presi,condicion)
		VALUES ('$num_acta','$observa','PRESIDENTE','$presi1','$presi2','$presi3','$presi4','$presi5','$presi6','$presi7','$presi8','$presi9','$presi10','$presi11','$presi12','$presi13','$presi14','$presi15','$presi16','$presi17','$presi18','$blanco','$nulo','$impugnado','$total_presi','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idactapresi,$num_acta,$observa,$presi1,$presi2,$presi3,$presi4,$presi5,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi12,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,$blanco,$nulo,$impugnado,$total_presi)
	{
		$sql="UPDATE actapresi SET num_acta='$num_acta',observa='$observa',presi1='$presi1',presi2='$presi2',presi3='$presi3',presi4='$presi4',presi5='$presi5',presi6='$presi6',presi7='$presi7',presi8='$presi8',presi9='$presi9',presi10='$presi10',presi11='$presi11',presi12='$presi12',presi13='$presi13',presi14='$presi14',presi15='$presi15',presi16='$presi16',presi17='$presi17',presi18='$presi18',blanco='$blanco',nulo='$nulo',impugnado='$impugnado',total_presi='$total_presi' WHERE idactapresi='$idactapresi'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar 
	public function observar($idactapresi)
	{
		$sql="UPDATE actapresi SET condicion='0' WHERE idactapresi='$idactapresi'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar 
	public function correcto($idactapresi)
	{
		$sql="UPDATE actapresi SET condicion='1' WHERE idactapresi='$idactapresi'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idactapresi)
	{
		$sql="SELECT * FROM actapresi WHERE idactapresi='$idactapresi'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM actapresi ORDER BY idactapresi DESC";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM actapresi where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>