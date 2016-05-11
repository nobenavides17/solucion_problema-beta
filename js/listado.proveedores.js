
		
	

		

		function agregarProveedor(){
			$('#myModal').removeClass('hide');
			$('#myModal').modal('toggle');
		}


		function modificarProveedor(id) {
			$('#myModal-modificacion').removeClass('hide');
			$('#myModal-modificacion').modal('toggle');
			var ajaxdata={"action":"datos_modificar_proveedor",
							"id_proveedor": id}
				$.ajax({
					type:"POST",
					url : "acciones/listado.proveedores.action.php",
					dataType:'json',
					data : ajaxdata ,
					success : function(data)
					{   
						$('#mod-proveedor').val(data.nombre_proveedor);
						$('#mod-telefono').val(data.telefono);
						$('#mod-direccion').val(data.direccion);
						$('#mod-email').val(data.email);
						$('#mod-nombre').val(data.nombre_proveedor);

						$('#mod-id_proveedor').val(data.id_proveedor);
					},
					complete: function() 
					{}
				});
		}


		

		


		function guardarAgregarProveedor() {
			$('#myModal').removeClass('hide');
			$('#myModal').modal('toggle');
			var ajaxdata=$("#form_add_proveedor").serialize();
				$.ajax({
					type:"POST",
					url : "acciones/listado.proveedores.action.php",
					data : ajaxdata ,
					success : function(data)
					{   
						$("body").append(data);
						$('.modal-backdrop').hide("slow");
						$('#myModal').hide("slow");
					},
					complete: function() 
					{
						
					}
				});
		}


		function guardarModificarProveedor() {
			
			var ajaxdata=$("#form-mod-proveedor").serialize();
				$.ajax({
					type:"POST",
					url : "acciones/listado.proveedores.action.php",
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

			$("#agregar_proveedor").click(function(){
				guardarAgregarProveedor();
			});

			$("#modificar-proveedor").click(function(){
				guardarModificarProveedor();
			});

			$(function(){
			});

			$('#table').DataTable( {
		        "ajax": "tablesAjax/tablelistado.proveedores.php",
		        "columns": [
		          
		            { "data": "NOMBRE" },
		            { "data": "DIRECCION" },
		             { "data": "EMAIL" },
		            { "data": "TELEFONO" },
		            { "data": "ACCIONES" }
		        ]
		    } );
		
		
 });//fin document