//<----------------------------------------USUARIO------------------------>
//VALIDO USUARIO Y PASSWORDS
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
		function(data, textStatus, jqXHR)
		{
			if(data.validacion == 'ok')
			{
				
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
						{	
							if(data=="ADMIN")
							{
								window.location.href = "./ADM_index.html"; 
							}
							else if (data == "EMPLEADO")
							{
								window.location.href = "./EMP_index.html"; 
							}
						}
				});


			}
			else if(data.validacion == 'error')
			{
				alert("Error en contraseña");
				window.location.href = "./login.html"; 
			}
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
			
		}
    });

}

//INSERTO EN LOS LOGS
function LoginBD()
{
	var usuarioid = $("#usuarioid").val();
    var paginaLogin = "http://localhost:8080/Programacion3-2017/TP_ESTACIONAMIENTO/index.php/loginbd/";
	var paginaFinal = paginaLogin.concat(usuarioid);

	var usuarioLogin = {};
	usuarioLogin.usuarionombre = usuarioid;

	$.ajax({
        type: 'GET',
        url: paginaFinal,
        dataType: "json",
        data: {
			usuarioLogin : usuarioLogin
		},

		success:
		function(data, textStatus, jqXHR)
		{
		}

	});
}

//ACCIONES - LOGIN DE USUARIO
function AccionesIngreso ()
{
	ValidarUsuario();
	LoginBD();
}

//<----------------------------------------VEHICULO------------------------>


function VehiculoExiste()
{
	var patente = $("#patenteid").val();
    var paginaExiste = "http://localhost:8080/Programacion3-2017/TP_ESTACIONAMIENTO/index.php/traerunVehiculo/";
	var paginaVehic = paginaExiste.concat(patente);

	  var succeed = false;
	
	$.ajax({
		async: false,
        type: 'GET',
        url: paginaVehic,
        data: {
			patente : patente
		},

		success:
		function(data, textStatus, jqXHR)
		{
			if (data == "NO")
			{
				succeed = false;
			}
			else 
			{
				succeed = true;
			}
		},

		});
	return succeed;
}

function AccionesIngresoVehic()
{
	alert(VehiculoExiste());
	// VehiculoEstacionado();
	// IngresoVehiculo();
}

// function IngresoVehiculo()}
// {
// 	var patente = $("#patente1").val();
// 	var color = $("#color1").val();
// 	var marca = $("#marca1").val();
	
//     var paginaLogin = "http://localhost:8080/Programacion3-2017/TP_ESTACIONAMIENTO/index.php/loginbd/";
// 	var paginaFinal = paginaLogin.concat(usuarioid);

// 	var usuarioLogin = {};
// 	usuarioLogin.usuarionombre = usuarioid;

// 	$.ajax({
//         type: 'GET',
//         url: paginaFinal,
//         dataType: "json",
//         data: {
// 			usuarioLogin : usuarioLogin
// 		},

// 		success:
// 		function(data, textStatus, jqXHR)
// 		{
// 		}

// 	});
// }

