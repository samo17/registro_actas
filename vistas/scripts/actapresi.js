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
    $('#lPresidencial').addClass("active");
}

//Función limpiar
function limpiar()
{
	$("#idactapresi").val("");
	$("#num_acta").val("");
	$("#observa").val("");
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
	
	$("#blanco").val("");
	$("#nulo").val("");
	$("#impugnado").val("");
	$("#total_presi").val("");	
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
					url: '../ajax/actapresi.php?op=listar',
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
		url: "../ajax/actapresi.php?op=guardaryeditar",
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

function mostrar(idactapresi)
{
	$.post("../ajax/actapresi.php?op=mostrar",{idactapresi : idactapresi}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		
		$("#num_acta").val(data.num_acta);
		$("#observa").val(data.observa);
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
		
		$("#blanco").val(data.blanco);
		$("#nulo").val(data.nulo);
		$("#impugnado").val(data.impugnado);
		$("#total_presi").val(data.total_presi);		
		$("#idactapresi").val(data.idactapresi);
		
	})
}

//Función para desactivar registros
function observar(idactapresi)
{
	bootbox.confirm("¿Está Seguro de Observar el Acta?", function(result){
		if(result)
        {
        	$.post("../ajax/actapresi.php?op=observar", {idactapresi : idactapresi}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function correcto(idactapresi)
{
	bootbox.confirm("¿Está Seguro de cambiar a correcto el Acta?", function(result){
		if(result)
        {
        	$.post("../ajax/actapresi.php?op=correcto", {idactapresi : idactapresi}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}


init();