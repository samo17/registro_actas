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
require_once "../modelos/Actacongre.php";

$actacongre=new Actacongre();

$idactacongre=isset($_POST["idactacongre"])? limpiarCadena($_POST["idactacongre"]):"";
$num_acta=isset($_POST["num_acta"])? limpiarCadena($_POST["num_acta"]):"";
$observa=isset($_POST["observa"])? limpiarCadena($_POST["observa"]):"";
$tipo_acta=isset($_POST["tipo_acta"])? limpiarCadena($_POST["tipo_acta"]):"";
$presi0=isset($_POST["presi0"])? limpiarCadena($_POST["presi0"]):"";
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
$presi12=isset($_POST["presi12"])? limpiarCadena($_POST["presi12"]):"";
$presi13=isset($_POST["presi13"])? limpiarCadena($_POST["presi13"]):"";
$presi14=isset($_POST["presi14"])? limpiarCadena($_POST["presi14"]):"";
$presi15=isset($_POST["presi15"])? limpiarCadena($_POST["presi15"]):"";
$presi16=isset($_POST["presi16"])? limpiarCadena($_POST["presi16"]):"";
$presi17=isset($_POST["presi17"])? limpiarCadena($_POST["presi17"]):"";
$presi18=isset($_POST["presi18"])? limpiarCadena($_POST["presi18"]):"";

$congre01=isset($_POST["congre01"])? limpiarCadena($_POST["congre01"]):"";
$congre02=isset($_POST["congre02"])? limpiarCadena($_POST["congre02"]):"";
$congre03=isset($_POST["congre03"])? limpiarCadena($_POST["congre03"]):"";
$congre04=isset($_POST["congre04"])? limpiarCadena($_POST["congre04"]):"";

$congre11=isset($_POST["congre11"])? limpiarCadena($_POST["congre11"]):"";
$congre12=isset($_POST["congre12"])? limpiarCadena($_POST["congre12"]):"";
$congre13=isset($_POST["congre13"])? limpiarCadena($_POST["congre13"]):"";
$congre14=isset($_POST["congre14"])? limpiarCadena($_POST["congre14"]):"";

$congre21=isset($_POST["congre21"])? limpiarCadena($_POST["congre21"]):"";
$congre22=isset($_POST["congre22"])? limpiarCadena($_POST["congre22"]):"";
$congre23=isset($_POST["congre23"])? limpiarCadena($_POST["congre23"]):"";
$congre24=isset($_POST["congre24"])? limpiarCadena($_POST["congre24"]):"";

$congre31=isset($_POST["congre31"])? limpiarCadena($_POST["congre31"]):"";
$congre32=isset($_POST["congre32"])? limpiarCadena($_POST["congre32"]):"";
$congre33=isset($_POST["congre33"])? limpiarCadena($_POST["congre33"]):"";
$congre34=isset($_POST["congre34"])? limpiarCadena($_POST["congre34"]):"";

$congre41=isset($_POST["congre41"])? limpiarCadena($_POST["congre41"]):"";
$congre42=isset($_POST["congre42"])? limpiarCadena($_POST["congre42"]):"";
$congre43=isset($_POST["congre43"])? limpiarCadena($_POST["congre43"]):"";
$congre44=isset($_POST["congre44"])? limpiarCadena($_POST["congre44"]):"";

$congre51=isset($_POST["congre51"])? limpiarCadena($_POST["congre51"]):"";
$congre52=isset($_POST["congre52"])? limpiarCadena($_POST["congre52"]):"";
$congre53=isset($_POST["congre53"])? limpiarCadena($_POST["congre53"]):"";
$congre54=isset($_POST["congre54"])? limpiarCadena($_POST["congre54"]):"";

$congre61=isset($_POST["congre61"])? limpiarCadena($_POST["congre61"]):"";
$congre62=isset($_POST["congre62"])? limpiarCadena($_POST["congre62"]):"";
$congre63=isset($_POST["congre63"])? limpiarCadena($_POST["congre63"]):"";
$congre64=isset($_POST["congre64"])? limpiarCadena($_POST["congre64"]):"";

$congre71=isset($_POST["congre71"])? limpiarCadena($_POST["congre71"]):"";
$congre72=isset($_POST["congre72"])? limpiarCadena($_POST["congre72"]):"";
$congre73=isset($_POST["congre73"])? limpiarCadena($_POST["congre73"]):"";
$congre74=isset($_POST["congre74"])? limpiarCadena($_POST["congre74"]):"";

$congre81=isset($_POST["congre81"])? limpiarCadena($_POST["congre81"]):"";
$congre82=isset($_POST["congre82"])? limpiarCadena($_POST["congre82"]):"";
$congre83=isset($_POST["congre83"])? limpiarCadena($_POST["congre83"]):"";
$congre84=isset($_POST["congre84"])? limpiarCadena($_POST["congre84"]):"";

$congre91=isset($_POST["congre91"])? limpiarCadena($_POST["congre91"]):"";
$congre92=isset($_POST["congre92"])? limpiarCadena($_POST["congre92"]):"";
$congre93=isset($_POST["congre93"])? limpiarCadena($_POST["congre93"]):"";
$congre94=isset($_POST["congre94"])? limpiarCadena($_POST["congre94"]):"";

$congre101=isset($_POST["congre101"])? limpiarCadena($_POST["congre101"]):"";
$congre102=isset($_POST["congre102"])? limpiarCadena($_POST["congre102"]):"";
$congre103=isset($_POST["congre103"])? limpiarCadena($_POST["congre103"]):"";
$congre104=isset($_POST["congre104"])? limpiarCadena($_POST["congre104"]):"";

$congre111=isset($_POST["congre111"])? limpiarCadena($_POST["congre111"]):"";
$congre112=isset($_POST["congre112"])? limpiarCadena($_POST["congre112"]):"";
$congre113=isset($_POST["congre113"])? limpiarCadena($_POST["congre113"]):"";
$congre114=isset($_POST["congre114"])? limpiarCadena($_POST["congre114"]):"";

$congre121=isset($_POST["congre121"])? limpiarCadena($_POST["congre121"]):"";
$congre122=isset($_POST["congre122"])? limpiarCadena($_POST["congre122"]):"";
$congre123=isset($_POST["congre123"])? limpiarCadena($_POST["congre123"]):"";
$congre124=isset($_POST["congre124"])? limpiarCadena($_POST["congre124"]):"";

$congre131=isset($_POST["congre131"])? limpiarCadena($_POST["congre131"]):"";
$congre132=isset($_POST["congre132"])? limpiarCadena($_POST["congre132"]):"";
$congre133=isset($_POST["congre133"])? limpiarCadena($_POST["congre133"]):"";
$congre134=isset($_POST["congre134"])? limpiarCadena($_POST["congre134"]):"";

$congre141=isset($_POST["congre141"])? limpiarCadena($_POST["congre141"]):"";
$congre142=isset($_POST["congre142"])? limpiarCadena($_POST["congre142"]):"";
$congre143=isset($_POST["congre143"])? limpiarCadena($_POST["congre143"]):"";
$congre144=isset($_POST["congre144"])? limpiarCadena($_POST["congre144"]):"";

$congre151=isset($_POST["congre151"])? limpiarCadena($_POST["congre151"]):"";
$congre152=isset($_POST["congre152"])? limpiarCadena($_POST["congre152"]):"";
$congre153=isset($_POST["congre153"])? limpiarCadena($_POST["congre153"]):"";
$congre154=isset($_POST["congre154"])? limpiarCadena($_POST["congre154"]):"";

$congre161=isset($_POST["congre161"])? limpiarCadena($_POST["congre161"]):"";
$congre162=isset($_POST["congre162"])? limpiarCadena($_POST["congre162"]):"";
$congre163=isset($_POST["congre163"])? limpiarCadena($_POST["congre163"]):"";
$congre164=isset($_POST["congre164"])? limpiarCadena($_POST["congre164"]):"";

$congre171=isset($_POST["congre171"])? limpiarCadena($_POST["congre171"]):"";
$congre172=isset($_POST["congre172"])? limpiarCadena($_POST["congre172"]):"";
$congre173=isset($_POST["congre173"])? limpiarCadena($_POST["congre173"]):"";
$congre174=isset($_POST["congre174"])? limpiarCadena($_POST["congre174"]):"";

$congre181=isset($_POST["congre181"])? limpiarCadena($_POST["congre181"]):"";
$congre182=isset($_POST["congre182"])? limpiarCadena($_POST["congre182"]):"";
$congre183=isset($_POST["congre183"])? limpiarCadena($_POST["congre183"]):"";
$congre184=isset($_POST["congre184"])? limpiarCadena($_POST["congre184"]):"";


$blanco=isset($_POST["blanco"])? limpiarCadena($_POST["blanco"]):"";
$nulo=isset($_POST["nulo"])? limpiarCadena($_POST["nulo"]):"";
$impugnado=isset($_POST["impugnado"])? limpiarCadena($_POST["impugnado"]):"";
$total_congre=isset($_POST["total_congre"])? limpiarCadena($_POST["total_congre"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idactacongre)){
			$rspta=$actacongre->insertar($num_acta,$observa,$presi0,$presi1,$presi2,$presi3,$presi4,$presi5,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi12,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,
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
											$blanco,$nulo,$impugnado,$total_congre);
			echo $rspta ? "Acta registrada" : "Acta no se pudo registrar / acta ya existe";
		}
		else {
			$rspta=$actacongre->editar($idactacongre,$num_acta,$observa,$presi0,$presi1,$presi2,$presi3,$presi4,$presi5,$presi6,$presi7,$presi8,$presi9,$presi10,$presi11,$presi12,$presi13,$presi14,$presi15,$presi16,$presi17,$presi18,
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
											$blanco,$nulo,$impugnado,$total_congre);
			echo $rspta ? "Acta actualizada" : "Acta no se pudo actualizar";
		}
	break;

	case 'observar':
		$rspta=$actacongre->observar($idactacongre);
 		echo $rspta ? "Acta Observada" : "Acta no se puede Observar";
	break;

	case 'correcto':
		$rspta=$actacongre->correcto($idactacongre);
 		echo $rspta ? "Acta corecto" : "Acta no se puede cambiar a correcto";
	break;

	case 'mostrar':
		$rspta=$actacongre->mostrar($idactacongre);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$actacongre->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idactacongre.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="observar('.$reg->idactacongre.')"><i class="fa fa-check"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idactacongre.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="correcto('.$reg->idactacongre.')"><i class="fa fa-close"></i></button>',
 				"1"=>$reg->num_acta,
 				"2"=>$reg->tipo_acta,
 				"3"=>$reg->total_congre,
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