var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});
    $('#mActas').addClass("treeview active");
    $('#lCongresal').addClass("active");
}

//Función limpiar
function limpiar()
{
	$("#idactacongre").val("");
	$("#num_acta").val("");
	$("#observa").val("");
	$("#presi0").val("");
	$("#presi1").val("");
	$("#presi2").val("");
	$("#presi3").val("");
	$("#presi4").val("");
	$("#presi5").val("");
	$("#presi6").val("");
	$("#presi7").val("");
	$("#presi8").val("");
	$("#presi9").val("");
	$("#presi10").val("");
	$("#presi11").val("");
	$("#presi12").val("");
	$("#presi13").val("");
	$("#presi14").val("");
	$("#presi15").val("");
	$("#presi16").val("");
	$("#presi17").val("");
	$("#presi18").val("");

	$("#congre01").val("");
	$("#congre02").val("");
	$("#congre03").val("");
	$("#congre04").val("");
	
	$("#congre11").val("");
	$("#congre12").val("");
	$("#congre13").val("");
	$("#congre14").val("");

	$("#congre21").val("");
	$("#congre22").val("");
	$("#congre23").val("");
	$("#congre24").val("");

	$("#congre31").val("");
	$("#congre32").val("");
	$("#congre33").val("");
	$("#congre34").val("");

	$("#congre41").val("");
	$("#congre42").val("");
	$("#congre43").val("");
	$("#congre44").val("");

	$("#congre51").val("");
	$("#congre52").val("");
	$("#congre53").val("");
	$("#congre54").val("");

	$("#congre61").val("");
	$("#congre62").val("");
	$("#congre63").val("");
	$("#congre64").val("");

	$("#congre71").val("");
	$("#congre72").val("");
	$("#congre73").val("");
	$("#congre74").val("");

	$("#congre81").val("");
	$("#congre82").val("");
	$("#congre83").val("");
	$("#congre84").val("");

	$("#congre91").val("");
	$("#congre92").val("");
	$("#congre93").val("");
	$("#congre94").val("");

	$("#congre101").val("");
	$("#congre102").val("");
	$("#congre103").val("");
	$("#congre104").val("");

	$("#congre111").val("");
	$("#congre112").val("");
	$("#congre113").val("");
	$("#congre114").val("");

	$("#congre121").val("");
	$("#congre122").val("");
	$("#congre123").val("");
	$("#congre124").val("");

	$("#congre131").val("");
	$("#congre132").val("");
	$("#congre133").val("");
	$("#congre134").val("");

	$("#congre141").val("");
	$("#congre142").val("");
	$("#congre143").val("");
	$("#congre144").val("");

	$("#congre151").val("");
	$("#congre152").val("");
	$("#congre153").val("");
	$("#congre154").val("");

	$("#congre161").val("");
	$("#congre162").val("");
	$("#congre163").val("");
	$("#congre164").val("");

	$("#congre171").val("");
	$("#congre172").val("");
	$("#congre173").val("");
	$("#congre174").val("");

	$("#congre181").val("");
	$("#congre182").val("");
	$("#congre183").val("");
	$("#congre184").val("");

	
	$("#blanco").val("");
	$("#nulo").val("");
	$("#impugnado").val("");
	$("#total_congre").val("");	
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/actacongre.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/actacongre.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(idactacongre)
{
	$.post("../ajax/actacongre.php?op=mostrar",{idactacongre : idactacongre}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		
		$("#num_acta").val(data.num_acta);
		$("#observa").val(data.observa);
		$("#presi0").val(data.presi0);
		$("#presi1").val(data.presi1);
		$("#presi2").val(data.presi2);
		$("#presi3").val(data.presi3);
		$("#presi4").val(data.presi4);
		$("#presi5").val(data.presi5);
		$("#presi6").val(data.presi6);
		$("#presi7").val(data.presi7);
		$("#presi8").val(data.presi8);
		$("#presi9").val(data.presi9);
		$("#presi10").val(data.presi10);
		$("#presi11").val(data.presi11);
		$("#presi12").val(data.presi12);
		$("#presi13").val(data.presi13);
		$("#presi14").val(data.presi14);
		$("#presi15").val(data.presi15);
		$("#presi16").val(data.presi16);
		$("#presi17").val(data.presi17);
		$("#presi18").val(data.presi18);
		
		$("#congre01").val(data.congre01);
		$("#congre02").val(data.congre02);
		$("#congre03").val(data.congre03);
		$("#congre04").val(data.congre04);
		
		$("#congre11").val(data.congre11);
		$("#congre12").val(data.congre12);
		$("#congre13").val(data.congre13);
		$("#congre14").val(data.congre14);

		$("#congre21").val(data.congre21);
		$("#congre22").val(data.congre22);
		$("#congre23").val(data.congre23);
		$("#congre24").val(data.congre24);

		$("#congre31").val(data.congre31);
		$("#congre32").val(data.congre32);
		$("#congre33").val(data.congre33);
		$("#congre34").val(data.congre34);

		$("#congre41").val(data.congre41);
		$("#congre42").val(data.congre42);
		$("#congre43").val(data.congre43);
		$("#congre44").val(data.congre44);

		$("#congre51").val(data.congre51);
		$("#congre52").val(data.congre52);
		$("#congre53").val(data.congre53);
		$("#congre54").val(data.congre54);

		$("#congre61").val(data.congre61);
		$("#congre62").val(data.congre62);
		$("#congre63").val(data.congre63);
		$("#congre64").val(data.congre64);

		$("#congre71").val(data.congre71);
		$("#congre72").val(data.congre72);
		$("#congre73").val(data.congre73);
		$("#congre74").val(data.congre74);

		$("#congre81").val(data.congre81);
		$("#congre82").val(data.congre82);
		$("#congre83").val(data.congre83);
		$("#congre84").val(data.congre84);

		$("#congre91").val(data.congre91);
		$("#congre92").val(data.congre92);
		$("#congre93").val(data.congre93);
		$("#congre94").val(data.congre94);

		$("#congre101").val(data.congre101);
		$("#congre102").val(data.congre102);
		$("#congre103").val(data.congre103);
		$("#congre104").val(data.congre104);

		$("#congre111").val(data.congre111);
		$("#congre112").val(data.congre112);
		$("#congre113").val(data.congre113);
		$("#congre114").val(data.congre114);

		$("#congre121").val(data.congre121);
		$("#congre122").val(data.congre122);
		$("#congre123").val(data.congre123);
		$("#congre124").val(data.congre124);

		$("#congre131").val(data.congre131);
		$("#congre132").val(data.congre132);
		$("#congre133").val(data.congre133);
		$("#congre134").val(data.congre134);

		$("#congre141").val(data.congre141);
		$("#congre142").val(data.congre142);
		$("#congre143").val(data.congre143);
		$("#congre144").val(data.congre144);

		$("#congre151").val(data.congre151);
		$("#congre152").val(data.congre152);
		$("#congre153").val(data.congre153);
		$("#congre154").val(data.congre154);

		$("#congre161").val(data.congre161);
		$("#congre162").val(data.congre162);
		$("#congre163").val(data.congre163);
		$("#congre164").val(data.congre164);

		$("#congre171").val(data.congre171);
		$("#congre172").val(data.congre172);
		$("#congre173").val(data.congre173);
		$("#congre174").val(data.congre174);

		$("#congre181").val(data.congre181);
		$("#congre182").val(data.congre182);
		$("#congre183").val(data.congre183);
		$("#congre184").val(data.congre184);
		
		$("#blanco").val(data.blanco);
		$("#nulo").val(data.nulo);
		$("#impugnado").val(data.impugnado);
		$("#total_congre").val(data.total_congre);		
		$("#idactacongre").val(data.idactacongre);
		
	})
}

//Función para desactivar registros
function observar(idactacongre)
{
	bootbox.confirm("¿Está Seguro de Observar el Acta?", function(result){
		if(result)
        {
        	$.post("../ajax/actacongre.php?op=observar", {idactacongre : idactacongre}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function correcto(idactacongre)
{
	bootbox.confirm("¿Está Seguro de cambiar a correcto el Acta?", function(result){
		if(result)
        {
        	$.post("../ajax/actacongre.php?op=correcto", {idactacongre : idactacongre}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

init();