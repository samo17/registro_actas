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
require_once "../modelos/Actaparla.php";

$actaparla=new Actaparla();

$idactaparla=isset($_POST["idactaparla"])? limpiarCadena($_POST["idactaparla"]):"";
$num_acta=isset($_POST["num_acta"])? limpiarCadena($_POST["num_acta"]):"";
$observa=isset($_POST["observa"])? limpiarCadena($_POST["observa"]):"";
$tipo_acta=isset($_POST["tipo_acta"])? limpiarCadena($_POST["tipo_acta"]):"";
$presi0=isset($_POST["presi0"])? limpiarCadena($_POST["presi0"]):"";
$presi1=isset($_POST["presi1"])? limpiarCadena($_POST["presi1"]):"";
$presi2=isset($_POST["presi2"])? limpiarCadena($_POST["presi2"]):"";
$presi3=isset($_POST["presi3"])? limpiarCadena($_POST["presi3"]):"";
$presi6=isset($_POST["presi6"])? limpiarCadena($_POST["presi6"]):"";
$presi7=isset($_POST["presi7"])? limpiarCadena($_POST["presi7"]):"";
$presi8=isset($_POST["presi8"])? limpiarCadena($_POST["presi8"]):"";
$presi9=isset($_POST["presi9"])? limpiarCadena($_POST["presi9"]):"";
$presi10=isset($_POST["presi10"])? limpiarCadena($_POST["presi10"]):"";
$presi11=isset($_POST["presi11"])? limpiarCadena($_POST["presi11"]):"";
$presi13=isset($_POST["presi13"])? limpiarCadena($_POST["presi13"]):"";
$presi14=isset($_POST["presi14"])? limpiarCadena($_POST["presi14"]):"";
$presi15=isset($_POST["presi15"])? limpiarCadena($_POST["presi15"]):"";
$presi16=isset($_POST["presi16"])? limpiarCadena($_POST["presi16"]):"";
$presi17=isset($_POST["presi17"])? limpiarCadena($_POST["presi17"]):"";
$presi18=isset($_POST["presi18"])? limpiarCadena($_POST["presi18"]):"";

$parla01=isset($_POST["parla01"])? limpiarCadena($_POST["parla01"]):"";
$parla02=isset($_POST["parla02"])? limpiarCadena($_POST["parla02"]):"";
$parla03=isset($_POST["parla03"])? limpiarCadena($_POST["parla03"]):"";
$parla04=isset($_POST["parla04"])? limpiarCadena($_POST["parla04"]):"";

$parla11=isset($_POST["parla11"])? limpiarCadena($_POST["parla11"]):"";
$parla12=isset($_POST["parla12"])? limpiarCadena($_POST["parla12"]):"";
$parla13=isset($_POST["parla13"])? limpiarCadena($_POST["parla13"]):"";
$parla14=isset($_POST["parla14"])? limpiarCadena($_POST["parla14"]):"";

$parla21=isset($_POST["parla21"])? limpiarCadena($_POST["parla21"]):"";
$parla22=isset($_POST["parla22"])? limpiarCadena($_POST["parla22"]):"";
$parla23=isset($_POST["parla23"])? limpiarCadena($_POST["parla23"]):"";
$parla24=isset($_POST["parla24"])? limpiarCadena($_POST["parla24"]):"";

$parla31=isset($_POST["parla31"])? limpiarCadena($_POST["parla31"]):"";
$parla32=isset($_POST["parla32"])? limpiarCadena($_POST["parla32"]):"";
$parla33=isset($_POST["parla33"])? limpiarCadena($_POST["parla33"]):"";
$parla34=isset($_POST["parla34"])? limpiarCadena($_POST["parla34"]):"";

$parla61=isset($_POST["parla61"])? limpiarCadena($_POST["parla61"]):"";
$parla62=isset($_POST["parla62"])? limpiarCadena($_POST["parla62"]):"";
$parla63=isset($_POST["parla63"])? limpiarCadena($_POST["parla63"]):"";
$parla64=isset($_POST["parla64"])? limpiarCadena($_POST["parla64"]):"";

$parla71=isset($_POST["parla71"])? limpiarCadena($_POST["parla71"]):"";
$parla72=isset($_POST["parla72"])? limpiarCadena($_POST["parla72"]):"";
$parla73=isset($_POST["parla73"])? limpiarCadena($_POST["parla73"]):"";
$parla74=isset($_POST["parla74"])? limpiarCadena($_POST["parla74"]):"";

$parla81=isset($_POST["parla81"])? limpiarCadena($_POST["parla81"]):"";
$parla82=isset($_POST["parla82"])? limpiarCadena($_POST["parla82"]):"";
$parla83=isset($_POST["parla83"])? limpiarCadena($_POST["parla83"]):"";
$parla84=isset($_POST["parla84"])? limpiarCadena($_POST["parla84"]):"";

$parla91=isset($_POST["parla91"])? limpiarCadena($_POST["parla91"]):"";
$parla92=isset($_POST["parla92"])? limpiarCadena($_POST["parla92"]):"";
$parla93=isset($_POST["parla93"])? limpiarCadena($_POST["parla93"]):"";
$parla94=isset($_POST["parla94"])? limpiarCadena($_POST["parla94"]):"";

$parla101=isset($_POST["parla101"])? limpiarCadena($_POST["parla101"]):"";
$parla102=isset($_POST["parla102"])? limpiarCadena($_POST["parla102"]):"";
$parla103=isset($_POST["parla103"])? limpiarCadena($_POST["parla103"]):"";
$parla104=isset($_POST["parla104"])? limpiarCadena($_POST["parla104"]):"";

$parla111=isset($_POST["parla111"])? limpiarCadena($_POST["parla111"]):"";
$parla112=isset($_POST["parla112"])? limpiarCadena($_POST["parla112"]):"";
$parla113=isset($_POST["parla113"])? limpiarCadena($_POST["parla113"]):"";
$parla114=isset($_POST["parla114"])? limpiarCadena($_POST["parla114"]):"";

$parla131=isset($_POST["parla131"])? limpiarCadena($_POST["parla131"]):"";
$parla132=isset($_POST["parla132"])? limpiarCadena($_POST["parla132"]):"";
$parla133=isset($_POST["parla133"])? limpiarCadena($_POST["parla133"]):"";
$parla134=isset($_POST["parla134"])? limpiarCadena($_POST["parla134"]):"";

$parla141=isset($_POST["parla141"])? limpiarCadena($_POST["parla141"]):"";
$parla142=isset($_POST["parla142"])? limpiarCadena($_POST["parla142"]):"";
$parla143=isset($_POST["parla143"])? limpiarCadena($_POST["parla143"]):"";
$parla144=isset($_POST["parla144"])? limpiarCadena($_POST["parla144"]):"";

$parla151=isset($_POST["parla151"])? limpiarCadena($_POST["parla151"]):"";
$parla152=isset($_POST["parla152"])? limpiarCadena($_POST["parla152"]):"";
$parla153=isset($_POST["parla153"])? limpiarCadena($_POST["parla153"]):"";
$parla154=isset($_POST["parla154"])? limpiarCadena($_POST["parla154"]):"";

$parla161=isset($_POST["parla161"])? limpiarCadena($_POST["parla161"]):"";
$parla162=isset($_POST["parla162"])? limpiarCadena($_POST["parla162"]):"";
$parla163=isset($_POST["parla163"])? limpiarCadena($_POST["parla163"]):"";
$parla164=isset($_POST["parla164"])? limpiarCadena($_POST["parla164"]):"";

$parla171=isset($_POST["parla171"])? limpiarCadena($_POST["parla171"]):"";
$parla172=isset($_POST["parla172"])? limpiarCadena($_POST["parla172"]):"";
$parla173=isset($_POST["parla173"])? limpiarCadena($_POST["parla173"]):"";
$parla174=isset($_POST["parla174"])? limpiarCadena($_POST["parla174"]):"";

$parla181=isset($_POST["parla181"])? limpiarCadena($_POST["parla181"]):"";
$parla182=isset($_POST["parla182"])? limpiarCadena($_POST["parla182"]):"";
$parla183=isset($_POST["parla183"])? limpiarCadena($_POST["parla183"]):"";
$parla184=isset($_POST["parla184"])? limpiarCadena($_POST["parla184"]):"";


$blanco=isset($_POST["blanco"])? limpiarCadena($_POST["blanco"]):"";
$nulo=isset($_POST["nulo"])? limpiarCadena($_POST["nulo"]):"";
$impugnado=isset($_POST["impugnado"])? limpiarCadena($_POST["impugnado"]):"";
$total_parla=isset($_POST["total_parla"])? limpiarCadena($_POST["total_parla"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idactaparla)){
			$rspta=$actaparla->insertar($num_acta,$observa,$presi0,$presi1,$presi2,$presi3,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,
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
											$blanco,$nulo,$impugnado,$total_parla);
			echo $rspta ? "Acta registrada" : "Acta no se pudo registrar / acta ya existe";
		}
		else {
			$rspta=$actaparla->editar($idactaparla,$num_acta,$observa,$presi0,$presi1,$presi2,$presi3,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,
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
											$blanco,$nulo,$impugnado,$total_parla);
			echo $rspta ? "Acta actualizada" : "Acta no se pudo actualizar";
		}
	break;

	case 'observar':
		$rspta=$actaparla->observar($idactaparla);
 		echo $rspta ? "Acta Observada" : "Acta no se puede Observar";
	break;

	case 'correcto':
		$rspta=$actaparla->correcto($idactaparla);
 		echo $rspta ? "Acta corecto" : "Acta no se puede cambiar a correcto";
	break;

	case 'mostrar':
		$rspta=$actaparla->mostrar($idactaparla);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$actaparla->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idactaparla.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="observar('.$reg->idactaparla.')"><i class="fa fa-check"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idactaparla.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="correcto('.$reg->idactaparla.')"><i class="fa fa-close"></i></button>',
 				"1"=>$reg->num_acta,
 				"2"=>$reg->tipo_acta,
 				"3"=>$reg->total_parla,
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