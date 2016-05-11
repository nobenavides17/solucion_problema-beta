
		
	

		function selectSucursales(){
				
					var ajaxdata={"action":"selectSucursales"}
					$.ajax({
						type:"POST",
						url : "acciones/login.action.php",

						data : ajaxdata ,
						success : function(data)
						{   
							$("#select_sucursal").append(data);
						},
						complete: function() 
						{}
					});
			}


		function asignarSucursal(id) {
			$('#myModal').removeClass('hide');
			$('#myModal').modal('toggle');
			var ajaxdata={"action":"datos_usuario_agregar_sucursal",
							"id_usuario": id}
				$.ajax({
					type:"POST",
					url : "acciones/listado.usuarios.action.php",
					dataType:'json',
					data : ajaxdata ,
					success : function(data)
					{   
						$('#usuario').val(data.username);
						$('#id_usuario').val(data.id_usuario);
					},
					complete: function() 
					{}
				});
		}


		function modificarUsuario(id) {
			$('#myModal-modificacion').removeClass('hide');
			$('#myModal-modificacion').modal('toggle');
			var ajaxdata={"action":"datos_modificar_usuario",
							"id_usuario": id}
				$.ajax({
					type:"POST",
					url : "acciones/listado.usuarios.action.php",
					dataType:'json',
					data : ajaxdata ,
					success : function(data)
					{   
						$('#mod-username').val(data.username);
						$('#mod-nombre').val(data.nombre);

						$('#mod-id_usuario').val(data.id_usuario);
					},
					complete: function() 
					{}
				});
		}


		function detallesUsuario(id) {
			$('#myModal-detalles').removeClass('hide');
			$('#myModal-detalles').modal('toggle');
			var ajaxdata={"action":"detalles_usuario",
							"username": String(id)}
				$.ajax({
					type:"POST",
					url : "acciones/listado.usuarios.action.php",
				
					data : ajaxdata ,
					success : function(data)
					{	$("#detalles-usuario *").remove();
						$("#detalles-usuario").append(data); 
					},
					complete: function() 
					{}
				});
		}

		


		function guardarAsignarSucursal() {
			$('#myModal').removeClass('hide');
			$('#myModal').modal('toggle');
			var ajaxdata=$("#form_add_user_sucursal").serialize();
				$.ajax({
					type:"POST",
					url : "acciones/listado.usuarios.action.php",
					data : ajaxdata ,
					success : function(data)
					{   
						$("body").append(data);
					},
					complete: function() 
					{
						$('.modal-backdrop').hide("slow");
						$('#myModal').hide("slow");
					}
				});
		}


		function guardarModificarUsuario() {
			
			var ajaxdata=$("#form-mod-usuario").serialize();
				$.ajax({
					type:"POST",
					url : "acciones/listado.usuarios.action.php",
					data : ajaxdata ,
					success : function(data)
					{   
						$("body").append(data);
					},
					complete: function() 
					{
						$('.modal-backdrop').hide("slow");
						$('#myModal-modificacion').hide("slow");
					}
				});
		}


$(document).ready(function(){

			$("#agregar_user_sucursal").click(function(){
				guardarAsignarSucursal();
			});

			$("#modificar-usuario").click(function(){
				guardarModificarUsuario();
			});

			$(function(){
				selectSucursales();
			});

			$('#table').DataTable( {
		        "ajax": "tablesAjax/tableUsuarios.php",
		        "columns": [
		          
		            { "data": "NOMBRE" },
		            { "data": "USERNAME" },
		            { "data": "ACCIONES" }
		        ]
		    } );
		
		
 });//fin document