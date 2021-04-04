<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Actacongre
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($num_acta,$observa,$presi0,$presi1,$presi2,$presi3,$presi4,$presi5,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi12,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,
												$congre01,$congre02,$congre03,$congre04,
												$congre11,$congre12,$congre13,$congre14,
												$congre21,$congre22,$congre23,$congre24,
												$congre31,$congre32,$congre33,$congre34,
												$congre41,$congre42,$congre43,$congre44,
												$congre51,$congre52,$congre53,$congre54,
												$congre61,$congre62,$congre63,$congre64,
												$congre71,$congre72,$congre73,$congre74,
												$congre81,$congre82,$congre83,$congre84,
												$congre91,$congre92,$congre93,$congre94,
												$congre101,$congre102,$congre103,$congre104,
												$congre111,$congre112,$congre113,$congre114,
												$congre121,$congre122,$congre123,$congre124,
												$congre131,$congre132,$congre133,$congre134,
												$congre141,$congre142,$congre143,$congre144,
												$congre151,$congre152,$congre153,$congre154,
												$congre161,$congre162,$congre163,$congre164,
												$congre171,$congre172,$congre173,$congre174,
												$congre181,$congre182,$congre183,$congre184,
												$blanco,$nulo,$impugnado,$total_congre)
	{
		$sql="INSERT INTO actacongre (num_acta,observa,tipo_acta,presi0,presi1,presi2,presi3,presi4,presi5,presi6,presi7,presi8,presi9,presi10,presi11,presi12,presi13,presi14,presi15,presi16,presi17,presi18,
												congre01,congre02,congre03,congre04,
												congre11,congre12,congre13,congre14,
												congre21,congre22,congre23,congre24,
												congre31,congre32,congre33,congre34,
												congre41,congre42,congre43,congre44,
												congre51,congre52,congre53,congre54,
												congre61,congre62,congre63,congre64,
												congre71,congre72,congre73,congre74,
												congre81,congre82,congre83,congre84,
												congre91,congre92,congre93,congre94,
												congre101,congre102,congre103,congre104,
												congre111,congre112,congre113,congre114,
												congre121,congre122,congre123,congre124,
												congre131,congre132,congre133,congre134,
												congre141,congre142,congre143,congre144,
												congre151,congre152,congre153,congre154,
												congre161,congre162,congre163,congre164,
												congre171,congre172,congre173,congre174,
												congre181,congre182,congre183,congre184,
												blanco,nulo,impugnado,total_congre,condicion)
		VALUES ('$num_acta','$observa','CONGRESAL','$presi0','$presi1','$presi2','$presi3','$presi4','$presi5','$presi6','$presi7','$presi8','$presi9','$presi10','$presi11','$presi12','$presi13','$presi14','$presi15','$presi16','$presi17','$presi18',
												'$congre01','$congre02','$congre03','$congre04',
												'$congre11','$congre12','$congre13','$congre14',
												'$congre21','$congre22','$congre23','$congre24',
												'$congre31','$congre32','$congre33','$congre34',
												'$congre41','$congre42','$congre43','$congre44',
												'$congre51','$congre52','$congre53','$congre54',
												'$congre61','$congre62','$congre63','$congre64',
												'$congre71','$congre72','$congre73','$congre74',
												'$congre81','$congre82','$congre83','$congre84',
												'$congre91','$congre92','$congre93','$congre94',
												'$congre101','$congre102','$congre103','$congre104',
												'$congre111','$congre112','$congre113','$congre114',
												'$congre121','$congre122','$congre123','$congre124',
												'$congre131','$congre132','$congre133','$congre134',
												'$congre141','$congre142','$congre143','$congre144',
												'$congre151','$congre152','$congre153','$congre154',
												'$congre161','$congre162','$congre163','$congre164',
												'$congre171','$congre172','$congre173','$congre174',
												'$congre181','$congre182','$congre183','$congre184',
												'$blanco','$nulo','$impugnado','$total_congre','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idactacongre,$num_acta,$observa,$presi0,$presi1,$presi2,$presi3,$presi4,$presi5,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi12,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,
												$congre01,$congre02,$congre03,$congre04,
												$congre11,$congre12,$congre13,$congre14,
												$congre21,$congre22,$congre23,$congre24,
												$congre31,$congre32,$congre33,$congre34,
												$congre41,$congre42,$congre43,$congre44,
												$congre51,$congre52,$congre53,$congre54,
												$congre61,$congre62,$congre63,$congre64,
												$congre71,$congre72,$congre73,$congre74,
												$congre81,$congre82,$congre83,$congre84,
												$congre91,$congre92,$congre93,$congre94,
												$congre101,$congre102,$congre103,$congre104,
												$congre111,$congre112,$congre113,$congre114,
												$congre121,$congre122,$congre123,$congre124,
												$congre131,$congre132,$congre133,$congre134,
												$congre141,$congre142,$congre143,$congre144,
												$congre151,$congre152,$congre153,$congre154,
												$congre161,$congre162,$congre163,$congre164,
												$congre171,$congre172,$congre173,$congre174,
												$congre181,$congre182,$congre183,$congre184,
												$blanco,$nulo,$impugnado,$total_congre)
	{
		$sql="UPDATE actacongre SET num_acta='$num_acta',observa='$observa', presi0='$presi0',presi1='$presi1',presi2='$presi2',presi3='$presi3',presi4='$presi4',presi5='$presi5',presi6='$presi6',presi7='$presi7',presi8='$presi8',presi9='$presi9',presi10='$presi10',presi11='$presi11',presi12='$presi12',presi13='$presi13',presi14='$presi14',presi15='$presi15',presi16='$presi16',presi17='$presi17',presi18='$presi18',
												congre01='$congre01',congre02='$congre02',congre03='$congre03',congre04='$congre04',
												congre11='$congre11',congre12='$congre12',congre13='$congre13',congre14='$congre14',
												congre21='$congre21',congre22='$congre22',congre23='$congre23',congre24='$congre24',
												congre31='$congre31',congre32='$congre32',congre33='$congre33',congre34='$congre34',
												congre41='$congre41',congre42='$congre42',congre43='$congre43',congre44='$congre44',
												congre51='$congre51',congre52='$congre52',congre53='$congre53',congre54='$congre54',
												congre61='$congre61',congre62='$congre62',congre63='$congre63',congre64='$congre64',
												congre71='$congre71',congre72='$congre72',congre73='$congre73',congre74='$congre74',
												congre81='$congre81',congre82='$congre82',congre83='$congre83',congre84='$congre84',
												congre91='$congre91',congre92='$congre92',congre93='$congre93',congre94='$congre94',
												congre101='$congre101',congre102='$congre102',congre103='$congre103',congre104='$congre104',
												congre111='$congre111',congre112='$congre112',congre113='$congre113',congre114='$congre114',
												congre121='$congre121',congre122='$congre122',congre123='$congre123',congre124='$congre124',
												congre131='$congre131',congre132='$congre132',congre133='$congre133',congre134='$congre134',
												congre141='$congre141',congre142='$congre142',congre143='$congre143',congre144='$congre144',
												congre151='$congre151',congre152='$congre152',congre153='$congre153',congre154='$congre154',
												congre161='$congre161',congre162='$congre162',congre163='$congre163',congre164='$congre164',
												congre171='$congre171',congre172='$congre172',congre173='$congre173',congre174='$congre174',
												congre181='$congre181',congre182='$congre182',congre183='$congre183',congre184='$congre184',
												blanco='$blanco',nulo='$nulo',impugnado='$impugnado',total_congre='$total_congre' WHERE idactacongre='$idactacongre'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar 
	public function observar($idactacongre)
	{
		$sql="UPDATE actacongre SET condicion='0' WHERE idactacongre='$idactacongre'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar 
	public function correcto($idactacongre)
	{
		$sql="UPDATE actacongre SET condicion='1' WHERE idactacongre='$idactacongre'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idactacongre)
	{
		$sql="SELECT * FROM actacongre WHERE idactacongre='$idactacongre'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM actacongre ORDER BY idactacongre DESC";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM actacongre where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>