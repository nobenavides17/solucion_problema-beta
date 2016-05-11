
		
	

		

		function agregarSucursal(){
			$('#myModal').removeClass('hide');
			$('#myModal').modal('toggle');
		}


		function modificarSucursal(id) {
			$('#myModal-modificacion').removeClass('hide');
			$('#myModal-modificacion').modal('toggle');
			var ajaxdata={"action":"datos_modificar_sucursal",
							"id_sucursal": id}
				$.ajax({
					type:"POST",
					url : "acciones/listado.sucursales.action.php",
					dataType:'json',
					data : ajaxdata ,
					success : function(data)
					{   
						$('#mod-sucursal').val(data.nombre_sucursal);
						$('#mod-telefono').val(data.telefono);
						$('#mod-direccion').val(data.direccion);

						$('#mod-id_sucursal').val(data.id_sucursal);
					},
					complete: function() 
					{}
				});
		}


		

		


		function guardarAgregarSucursal() {
			$('#myModal').removeClass('hide');
			$('#myModal').modal('toggle');
			var ajaxdata=$("#form_add_sucursal").serialize();
				$.ajax({
					type:"POST",
					url : "acciones/listado.sucursales.action.php",
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
			
			var ajaxdata=$("#form-mod-sucursal").serialize();
				$.ajax({
					type:"POST",
					url : "acciones/listado.sucursales.action.php",
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

			$("#agregar_sucursal").click(function(){
				guardarAgregarSucursal();
			});

			$("#modificar-sucursal").click(function(){
				guardarModificarUsuario();
			});

			$(function(){
			});

			$('#table').DataTable( {
		        "ajax": "tablesAjax/tablelistado.sucursales.php",
		        "columns": [
		          
		            { "data": "NOMBRE" },
		            { "data": "DIRECCION" },
		            { "data": "TELEFONO" },
		            { "data": "ACCIONES" }
		        ]
		    } );
		
		
 });//fin document