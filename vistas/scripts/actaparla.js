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
    $('#lParlamental').addClass("active");
}

//Función limpiar
function limpiar()
{
	$("#idactaparla").val("");
	$("#num_acta").val("");
	$("#observa").val("");
	$("#presi0").val("");
	$("#presi1").val("");
	$("#presi2").val("");
	$("#presi3").val("");
	$("#presi6").val("");
	$("#presi7").val("");
	$("#presi8").val("");
	$("#presi9").val("");
	$("#presi10").val("");
	$("#presi11").val("");
	$("#presi13").val("");
	$("#presi14").val("");
	$("#presi15").val("");
	$("#presi16").val("");
	$("#presi17").val("");
	$("#presi18").val("");

	$("#parla01").val("");
	$("#parla02").val("");
	$("#parla03").val("");
	$("#parla04").val("");
	
	$("#parla11").val("");
	$("#parla12").val("");
	$("#parla13").val("");
	$("#parla14").val("");

	$("#parla21").val("");
	$("#parla22").val("");
	$("#parla23").val("");
	$("#parla24").val("");

	$("#parla31").val("");
	$("#parla32").val("");
	$("#parla33").val("");
	$("#parla34").val("");

	$("#parla61").val("");
	$("#parla62").val("");
	$("#parla63").val("");
	$("#parla64").val("");

	$("#parla71").val("");
	$("#parla72").val("");
	$("#parla73").val("");
	$("#parla74").val("");

	$("#parla81").val("");
	$("#parla82").val("");
	$("#parla83").val("");
	$("#parla84").val("");

	$("#parla91").val("");
	$("#parla92").val("");
	$("#parla93").val("");
	$("#parla94").val("");

	$("#parla101").val("");
	$("#parla102").val("");
	$("#parla103").val("");
	$("#parla104").val("");

	$("#parla111").val("");
	$("#parla112").val("");
	$("#parla113").val("");
	$("#parla114").val("");

	$("#parla131").val("");
	$("#parla132").val("");
	$("#parla133").val("");
	$("#parla134").val("");

	$("#parla141").val("");
	$("#parla142").val("");
	$("#parla143").val("");
	$("#parla144").val("");

	$("#parla151").val("");
	$("#parla152").val("");
	$("#parla153").val("");
	$("#parla154").val("");

	$("#parla161").val("");
	$("#parla162").val("");
	$("#parla163").val("");
	$("#parla164").val("");

	$("#parla171").val("");
	$("#parla172").val("");
	$("#parla173").val("");
	$("#parla174").val("");

	$("#parla181").val("");
	$("#parla182").val("");
	$("#parla183").val("");
	$("#parla184").val("");
	
	$("#blanco").val("");
	$("#nulo").val("");
	$("#impugnado").val("");
	$("#total_parla").val("");	
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
					url: '../ajax/actaparla.php?op=listar',
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
		url: "../ajax/actaparla.php?op=guardaryeditar",
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

function mostrar(idactaparla)
{
	$.post("../ajax/actaparla.php?op=mostrar",{idactaparla : idactaparla}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		
		$("#num_acta").val(data.num_acta);
		$("#observa").val(data.observa);
		$("#presi0").val(data.presi0);
		$("#presi1").val(data.presi1);
		$("#presi2").val(data.presi2);
		$("#presi3").val(data.presi3);
		$("#presi6").val(data.presi6);
		$("#presi7").val(data.presi7);
		$("#presi8").val(data.presi8);
		$("#presi9").val(data.presi9);
		$("#presi10").val(data.presi10);
		$("#presi11").val(data.presi11);
		$("#presi13").val(data.presi13);
		$("#presi14").val(data.presi14);
		$("#presi15").val(data.presi15);
		$("#presi16").val(data.presi16);
		$("#presi17").val(data.presi17);
		$("#presi18").val(data.presi18);
		
		$("#parla01").val(data.parla01);
		$("#parla02").val(data.parla02);
		$("#parla03").val(data.parla03);
		$("#parla04").val(data.parla04);
		
		$("#parla11").val(data.parla11);
		$("#parla12").val(data.parla12);
		$("#parla13").val(data.parla13);
		$("#parla14").val(data.parla14);

		$("#parla21").val(data.parla21);
		$("#parla22").val(data.parla22);
		$("#parla23").val(data.parla23);
		$("#parla24").val(data.parla24);

		$("#parla31").val(data.parla31);
		$("#parla32").val(data.parla32);
		$("#parla33").val(data.parla33);
		$("#parla34").val(data.parla34);

		$("#parla61").val(data.parla61);
		$("#parla62").val(data.parla62);
		$("#parla63").val(data.parla63);
		$("#parla64").val(data.parla64);

		$("#parla71").val(data.parla71);
		$("#parla72").val(data.parla72);
		$("#parla73").val(data.parla73);
		$("#parla74").val(data.parla74);

		$("#parla81").val(data.parla81);
		$("#parla82").val(data.parla82);
		$("#parla83").val(data.parla83);
		$("#parla84").val(data.parla84);

		$("#parla91").val(data.parla91);
		$("#parla92").val(data.parla92);
		$("#parla93").val(data.parla93);
		$("#parla94").val(data.parla94);

		$("#parla101").val(data.parla101);
		$("#parla102").val(data.parla102);
		$("#parla103").val(data.parla103);
		$("#parla104").val(data.parla104);

		$("#parla111").val(data.parla111);
		$("#parla112").val(data.parla112);
		$("#parla113").val(data.parla113);
		$("#parla114").val(data.parla114);

		$("#parla131").val(data.parla131);
		$("#parla132").val(data.parla132);
		$("#parla133").val(data.parla133);
		$("#parla134").val(data.parla134);

		$("#parla141").val(data.parla141);
		$("#parla142").val(data.parla142);
		$("#parla143").val(data.parla143);
		$("#parla144").val(data.parla144);

		$("#parla151").val(data.parla151);
		$("#parla152").val(data.parla152);
		$("#parla153").val(data.parla153);
		$("#parla154").val(data.parla154);

		$("#parla161").val(data.parla161);
		$("#parla162").val(data.parla162);
		$("#parla163").val(data.parla163);
		$("#parla164").val(data.parla164);

		$("#parla171").val(data.parla171);
		$("#parla172").val(data.parla172);
		$("#parla173").val(data.parla173);
		$("#parla174").val(data.parla174);

		$("#parla181").val(data.parla181);
		$("#parla182").val(data.parla182);
		$("#parla183").val(data.parla183);
		$("#parla184").val(data.parla184);
		
		$("#blanco").val(data.blanco);
		$("#nulo").val(data.nulo);
		$("#impugnado").val(data.impugnado);
		$("#total_parla").val(data.total_parla);		
		$("#idactaparla").val(data.idactaparla);
		
	})
}

//Función para desactivar registros
function observar(idactaparla)
{
	bootbox.confirm("¿Está Seguro de Observar el Acta?", function(result){
		if(result)
        {
        	$.post("../ajax/actaparla.php?op=observar", {idactaparla : idactaparla}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function correcto(idactaparla)
{
	bootbox.confirm("¿Está Seguro de cambiar a correcto el Acta?", function(result){
		if(result)
        {
        	$.post("../ajax/actaparla.php?op=correcto", {idactaparla : idactaparla}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

init();