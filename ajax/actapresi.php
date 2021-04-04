<?php 
ob_start();
if (strlen(session_id()) < 1){
	session_start();//Validamos si existe o no la sesión
}
if (!isset($_SESSION["nombre"]))
{
  header("Location: ../vistas/login.html");//Validamos el acceso solo a los usuarios logueados al sistema.
}
else
{
//Validamos el acceso solo al usuario logueado y autorizado.
if ($_SESSION['actas']==1)
{
require_once "../modelos/Actapresi.php";

$actapresi=new Actapresi();

$idactapresi=isset($_POST["idactapresi"])? limpiarCadena($_POST["idactapresi"]):"";
$num_acta=isset($_POST["num_acta"])? limpiarCadena($_POST["num_acta"]):"";
$observa=isset($_POST["observa"])? limpiarCadena($_POST["observa"]):"";
$tipo_acta=isset($_POST["tipo_acta"])? limpiarCadena($_POST["tipo_acta"]):"";
$presi1=isset($_POST["presi1"])? limpiarCadena($_POST["presi1"]):"";
$presi2=isset($_POST["presi2"])? limpiarCadena($_POST["presi2"]):"";
$presi3=isset($_POST["presi3"])? limpiarCadena($_POST["presi3"]):"";
$presi4=isset($_POST["presi4"])? limpiarCadena($_POST["presi4"]):"";
$presi5=isset($_POST["presi5"])? limpiarCadena($_POST["presi5"]):"";
$presi6=isset($_POST["presi6"])? limpiarCadena($_POST["presi6"]):"";
$presi7=isset($_POST["presi7"])? limpiarCadena($_POST["presi7"]):"";
$presi8=isset($_POST["presi8"])? limpiarCadena($_POST["presi8"]):"";
$presi9=isset($_POST["presi9"])? limpiarCadena($_POST["presi9"]):"";
$presi10=isset($_POST["presi10"])? limpiarCadena($_POST["presi10"]):"";
$presi11=isset($_POST["presi11"])? limpiarCadena($_POST["presi11"]):"";
$presi11=isset($_POST["presi11"])? limpiarCadena($_POST["presi11"]):"";
$presi12=isset($_POST["presi12"])? limpiarCadena($_POST["presi12"]):"";
$presi13=isset($_POST["presi13"])? limpiarCadena($_POST["presi13"]):"";
$presi14=isset($_POST["presi14"])? limpiarCadena($_POST["presi14"]):"";
$presi15=isset($_POST["presi15"])? limpiarCadena($_POST["presi15"]):"";
$presi16=isset($_POST["presi16"])? limpiarCadena($_POST["presi16"]):"";
$presi17=isset($_POST["presi17"])? limpiarCadena($_POST["presi17"]):"";
$presi18=isset($_POST["presi18"])? limpiarCadena($_POST["presi18"]):"";

$blanco=isset($_POST["blanco"])? limpiarCadena($_POST["blanco"]):"";
$nulo=isset($_POST["nulo"])? limpiarCadena($_POST["nulo"]):"";
$impugnado=isset($_POST["impugnado"])? limpiarCadena($_POST["impugnado"]):"";
$total_presi=isset($_POST["total_presi"])? limpiarCadena($_POST["total_presi"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idactapresi)){
			$rspta=$actapresi->insertar($num_acta,$observa,$tipo_acta,$presi1,$presi2,$presi3,$presi4,$presi5,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi12,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,$blanco,$nulo,$impugnado,$total_presi);
			echo $rspta ? "Acta registrada" : "Acta no se pudo registrar / acta ya existe";
		}
		else {
			$rspta=$actapresi->editar($idactapresi,$num_acta,$observa,$presi1,$presi2,$presi3,$presi4,$presi5,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi12,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,$blanco,$nulo,$impugnado,$total_presi);
			echo $rspta ? "Acta actualizada" : "Acta no se pudo actualizar";
		}
	break;

	case 'observar':
		$rspta=$actapresi->observar($idactapresi);
 		echo $rspta ? "Acta Observada" : "Acta no se puede Observar";
	break;

	case 'correcto':
		$rspta=$actapresi->correcto($idactapresi);
 		echo $rspta ? "Acta corecto" : "Acta no se puede cambiar a correcto";
	break;

	case 'mostrar':
		$rspta=$actapresi->mostrar($idactapresi);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$actapresi->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idactapresi.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="observar('.$reg->idactapresi.')"><i class="fa fa-check"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idactapresi.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="correcto('.$reg->idactapresi.')"><i class="fa fa-close"></i></button>',
 				"1"=>$reg->num_acta,
 				"2"=>$reg->tipo_acta,
 				"3"=>$reg->total_presi,
 				"4"=>$reg->observa,
 				"5"=>($reg->condicion)?'<span class="label bg-green">Correcto</span>':
 				'<span class="label bg-red">Observado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
//Fin de las validaciones de acceso
}
else
{
  require 'noacceso.php';
}
}
ob_end_flush();
?>