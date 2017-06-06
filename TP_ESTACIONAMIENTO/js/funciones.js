
function ValidarUsuario()
{
    var paginaValid = "http://localhost:8080/Programacion3-2017/TP_ESTACIONAMIENTO/index.php/validarusuario";

	var usuarioid = $("#usuarioid").val();
	var passwordid = $("#passwordid").val();
	
	var usuario = {};

	usuario.usuarioid = usuarioid;
	usuario.passwordid = passwordid;
   
  //PRIMER AJAX ENCAPSULA USUARIO
  $.ajax({
        type: 'GET',
        url: paginaValid,
        dataType: "json",
        data: {
			usuario : usuario
		},

		success:
		function(data, textStatus, jqXHR){
		if(data.validacion == 'ok')
		{
			alert("estoy en 1success AJAX");
			var paginaTipoEmp = "http://localhost:8080/Programacion3-2017/TP_ESTACIONAMIENTO/index.php/tipoempleado";
			var usuarioTipo = {};
			usuarioTipo.usuarionombre = data.nombre;
			//SEGUNDO AJAX - VERIFICA TIPO_EMPLEADO
			$.ajax({
        	  	type: 'GET',
        	  	url: paginaTipoEmp,
        	   data: {
				usuarioTipo : usuarioTipo
				},
				//SUCCES 2DO AJAX
				success:
					function(data, textStatus, jqXHR)
					{	window.location.href = "./index.html"}
				
		
			});


	    }else if(data.validacion == 'error')
	    {
        alert("Error en contraseña");
		window.location.href = "./login.html"; 
        }
			//llamar a otro en success
			// $.ajax({
        	//   type: 'GET',
        	//   url: url,
        	//   data: data1, //pass data1 to second request
        	//   success: successHandler, // handler if second request succeeds 
        	//   dataType: dataType
   			//   });
			// window.location.href = "./EMP_index.html"; //cuando la contraseña es incorrecta, debería fallar

		},
		error: function(jqXHR, textStatus, errorThrown){
			alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
			
		}

    });
	

}


// function MostrarGrilla(){
	
//     var pagina = "./administracion.php";

// 	$.ajax({
//         type: 'POST',
//         url: pagina,
// 		data : { queHago : "mostrarGrilla"},
//         dataType: "html",
//         async: true
//     })
// 	.done(function (grilla) {

// 		$("#divGrilla").html(grilla);
// 	})
// 	.fail(function (jqXHR, textStatus, errorThrown) {
//         alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
//     });   
// }

// function SubirFoto(){
	
//     var pagina = "./administracion.php";
// 	var foto = $("#archivo").val();
	
// 	if(foto === "")
// 	{
// 		return;
// 	}

// 	var archivo = $("#archivo")[0];
// 	var formData = new FormData();
// 	formData.append("archivo",archivo.files[0]);
// 	formData.append("queHago", "subirFoto");

// 	$.ajax({
//         type: 'POST',
//         url: pagina,
//         dataType: "json",
// 		cache: false,
// 		contentType: false,
// 		processData: false,
//         data: formData,
//         async: true
//     })
// 	.done(function (objJson) {

// 		if(!objJson.Exito){
// 			alert(objJson.Mensaje);
// 			return;
// 		}
// 		$("#divFoto").html(objJson.Html);
// 	})
// 	.fail(function (jqXHR, textStatus, errorThrown) {
//         alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
//     });   
// }

// function BorrarFoto(){

// 	var pagina = "./administracion.php";
// 	var foto = $("#hdnArchivoTemp").val();
	
// 	if(foto === "")
// 	{
// 		alert("No hay foto que borrar!!!");
// 		return;
// 	}
	
// 	$.ajax({
//         type: 'POST',
//         url: pagina,
//         dataType: "json",
//         data: {
// 			queHago : "borrarFoto",
// 			foto : foto
// 		},
//         async: true
//     })
// 	.done(function (objJson) {

// 		if(!objJson.Exito){
// 			alert(objJson.Mensaje);
// 			return;
// 		}
		
// 		$("#divFoto").html("");
// 		$("#hdnArchivoTemp").val("");
// 		$("#archivo").val("");
// 	})
// 	.fail(function (jqXHR, textStatus, errorThrown) {
//         alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
//     });   	
	
// 	return;
// }

// function AgregarProducto(){
	
//     var pagina = "./administracion.php";
// 	var codBarra = $("#codBarra").val();
// 	var nombre = $("#nombre").val();
// 	var archivo = $("#hdnArchivoTemp").val();
// 	var queHago = $("#hdnQueHago").val();
	
// 	var producto = {};
// 	producto.nombre = nombre;
// 	producto.codBarra = codBarra;
// 	producto.archivo = archivo;

// 	if(!Validar(producto)){
// 		alert("Debe completar TODOS los campos!!!");
// 		return;
// 	}
	
//     $.ajax({
//         type: 'POST',
//         url: pagina,
//         dataType: "json",
//         data: {
// 			queHago : queHago,
// 			producto : producto
// 		},
//         async: true
//     })
// 	.done(function (objJson) {
		
// 		if(!objJson.Exito){
// 			alert(objJson.Mensaje);
// 			return;
// 		}
		
// 		alert(objJson.Mensaje);
		
// 		BorrarFoto();
		
// 		$("#codBarra").val("");
// 		$("#nombre").val("");
		
// 		MostrarGrilla();

// 		if(queHago !== "agregar"){
// 			$("#hdnQueHago").val("agregar");
// 			$("#codBarra").removeAttr("readonly");
// 		}
		
// 	})
// 	.fail(function (jqXHR, textStatus, errorThrown) {
//         alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
//     });    
		
// }

// function EliminarProducto(producto){
	
// 	if(!confirm("Desea ELIMINAR el PRODUCTO "+producto.nombre+"??")){
// 		return;
// 	}
	
//     var pagina = "./administracion.php";
	
//     $.ajax({
//         type: 'POST',
//         url: pagina,
//         dataType: "json",
//         data: {
// 			queHago : "eliminar",
// 			producto : producto
// 		},
//         async: true
//     })
// 	.done(function (objJson) {
		
// 		if(!objJson.Exito){
// 			alert(objJson.Mensaje);
// 			return;
// 		}
		
// 		alert(objJson.Mensaje);
		
// 		MostrarGrilla();

// 	})
// 	.fail(function (jqXHR, textStatus, errorThrown) {
//         alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
//     });    
	
// }
// function ModificarProducto(objJson){

// 	$("#codBarra").val(objJson.codBarra);
// 	$("#nombre").val(objJson.nombre);

// 	$("#hdnQueHago").val("modificar");
	
// 	$("#codBarra").attr("readonly", "readonly");
// }

// function Validar(objJson){

// 	alert("implementar validaciones...");
// 	//aplicar validaciones
// 	return true;
// }