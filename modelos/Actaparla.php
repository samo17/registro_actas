<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Actaparla
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($num_acta,$observa,$presi0,$presi1,$presi2,$presi3,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,
												$parla01,$parla02,$parla03,$parla04,
												$parla11,$parla12,$parla13,$parla14,
												$parla21,$parla22,$parla23,$parla24,
												$parla31,$parla32,$parla33,$parla34,
												$parla61,$parla62,$parla63,$parla64,
												$parla71,$parla72,$parla73,$parla74,
												$parla81,$parla82,$parla83,$parla84,
												$parla91,$parla92,$parla93,$parla94,
												$parla101,$parla102,$parla103,$parla104,
												$parla111,$parla112,$parla113,$parla114,
												$parla131,$parla132,$parla133,$parla134,
												$parla141,$parla142,$parla143,$parla144,
												$parla151,$parla152,$parla153,$parla154,
												$parla161,$parla162,$parla163,$parla164,
												$parla171,$parla172,$parla173,$parla174,
												$parla181,$parla182,$parla183,$parla184,
												$blanco,$nulo,$impugnado,$total_parla)
	{
		$sql="INSERT INTO actaparla (num_acta,observa,tipo_acta,presi0,presi1,presi2,presi3,presi6,presi7,presi8,presi9,presi10,presi11,presi13,presi14,presi15,presi16,presi17,presi18,
												parla01,parla02,parla03,parla04,
												parla11,parla12,parla13,parla14,
												parla21,parla22,parla23,parla24,
												parla31,parla32,parla33,parla34,
												parla61,parla62,parla63,parla64,
												parla71,parla72,parla73,parla74,
												parla81,parla82,parla83,parla84,
												parla91,parla92,parla93,parla94,
												parla101,parla102,parla103,parla104,
												parla111,parla112,parla113,parla114,
												parla131,parla132,parla133,parla134,
												parla141,parla142,parla143,parla144,
												parla151,parla152,parla153,parla154,
												parla161,parla162,parla163,parla164,
												parla171,parla172,parla173,parla174,
												parla181,parla182,parla183,parla184,
												blanco,nulo,impugnado,total_parla,condicion)
		VALUES ('$num_acta','$observa','PARLAMENTAL','$presi0','$presi1','$presi2','$presi3','$presi6','$presi7','$presi8','$presi9','$presi10','$presi11','$presi13','$presi14','$presi15','$presi16','$presi17','$presi18',
												'$parla01','$parla02','$parla03','$parla04',
												'$parla11','$parla12','$parla13','$parla14',
												'$parla21','$parla22','$parla23','$parla24',
												'$parla31','$parla32','$parla33','$parla34',
												'$parla61','$parla62','$parla63','$parla64',
												'$parla71','$parla72','$parla73','$parla74',
												'$parla81','$parla82','$parla83','$parla84',
												'$parla91','$parla92','$parla93','$parla94',
												'$parla101','$parla102','$parla103','$parla104',
												'$parla111','$parla112','$parla113','$parla114',
												'$parla131','$parla132','$parla133','$parla134',
												'$parla141','$parla142','$parla143','$parla144',
												'$parla151','$parla152','$parla153','$parla154',
												'$parla161','$parla162','$parla163','$parla164',
												'$parla171','$parla172','$parla173','$parla174',
												'$parla181','$parla182','$parla183','$parla184',
												'$blanco','$nulo','$impugnado','$total_parla','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idactaparla,$num_acta,$observa,$presi0,$presi1,$presi2,$presi3,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,
												$parla01,$parla02,$parla03,$parla04,
												$parla11,$parla12,$parla13,$parla14,
												$parla21,$parla22,$parla23,$parla24,
												$parla31,$parla32,$parla33,$parla34,
												$parla61,$parla62,$parla63,$parla64,
												$parla71,$parla72,$parla73,$parla74,
												$parla81,$parla82,$parla83,$parla84,
												$parla91,$parla92,$parla93,$parla94,
												$parla101,$parla102,$parla103,$parla104,
												$parla111,$parla112,$parla113,$parla114,
												$parla131,$parla132,$parla133,$parla134,
												$parla141,$parla142,$parla143,$parla144,
												$parla151,$parla152,$parla153,$parla154,
												$parla161,$parla162,$parla163,$parla164,
												$parla171,$parla172,$parla173,$parla174,
												$parla181,$parla182,$parla183,$parla184,
												$blanco,$nulo,$impugnado,$total_parla)
	{
		$sql="UPDATE actaparla SET num_acta='$num_acta',observa='$observa', presi0='$presi0',presi1='$presi1',presi2='$presi2',presi3='$presi3',presi4='$presi4',presi5='$presi5',presi6='$presi6',presi7='$presi7',presi8='$presi8',presi9='$presi9',presi10='$presi10',presi11='$presi11',presi12='$presi12',presi13='$presi13',presi14='$presi14',presi15='$presi15',presi16='$presi16',presi17='$presi17',presi18='$presi18',
												parla01='$parla01',parla02='$parla02',parla03='$parla03',parla04='$parla04',
												parla11='$parla11',parla12='$parla12',parla13='$parla13',parla14='$parla14',
												parla21='$parla21',parla22='$parla22',parla23='$parla23',parla24='$parla24',
												parla31='$parla31',parla32='$parla32',parla33='$parla33',parla34='$parla34',
												parla61='$parla61',parla62='$parla62',parla63='$parla63',parla64='$parla64',
												parla71='$parla71',parla72='$parla72',parla73='$parla73',parla74='$parla74',
												parla81='$parla81',parla82='$parla82',parla83='$parla83',parla84='$parla84',
												parla91='$parla91',parla92='$parla92',parla93='$parla93',parla94='$parla94',
												parla101='$parla101',parla102='$parla102',parla103='$parla103',parla104='$parla104',
												parla111='$parla111',parla112='$parla112',parla113='$parla113',parla114='$parla114',
												parla131='$parla131',parla132='$parla132',parla133='$parla133',parla134='$parla134',
												parla141='$parla141',parla142='$parla142',parla143='$parla143',parla144='$parla144',
												parla151='$parla151',parla152='$parla152',parla153='$parla153',parla154='$parla154',
												parla161='$parla161',parla162='$parla162',parla163='$parla163',parla164='$parla164',
												parla171='$parla171',parla172='$parla172',parla173='$parla173',parla174='$parla174',
												parla181='$parla181',parla182='$parla182',parla183='$parla183',parla184='$parla184',
												blanco='$blanco',nulo='$nulo',impugnado='$impugnado',total_parla='$total_parla' WHERE idactaparla='$idactaparla'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar 
	public function observar($idactaparla)
	{
		$sql="UPDATE actaparla SET condicion='0' WHERE idactaparla='$idactaparla'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar 
	public function correcto($idactaparla)
	{
		$sql="UPDATE actaparla SET condicion='1' WHERE idactaparla='$idactaparla'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idactaparla)
	{
		$sql="SELECT * FROM actaparla WHERE idactaparla='$idactaparla'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM actaparla ORDER BY idactaparla DESC";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM actaparla where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>