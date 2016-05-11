
		
	

		

		function agregarProducto(){
			window.location = "agregar.producto.php";
		}


		function modificarProducto(id){
			window.location = "sesiones.php?id="+id;
		}
		
		function habilitarProducto(){
			
		}

		function desahabilitarProducto(){
		}


		function detallesProducto(id) {
			$('#myModal').removeClass('hide');
			$('#myModal').modal('toggle');
			var ajaxdata={"action":"detalles_producto",
							"id_producto": id}
				$.ajax({
					type:"POST",
					url : "acciones/listado.productos.action.php",
					data : ajaxdata ,
					success : function(data)
					{   
						$("#detalles_producto *").remove();
						$("#detalles_producto").append(data);
					},
					complete: function() 
					{}
				});
		}


		

		


		

		


$(document).ready(function(){

			$("#modificar-producto").click(function(){
				$("#form-mod-producto").submit();
			});
			
			$(function(){
			});

			$('#table').DataTable( {
		        "ajax": "tablesAjax/tablelistado.productos.php",
		        "columns": [
		          
		            { "data": "CODIGO" },
		            { "data": "DESCRIPCION" },
		            { "data": "MARCA" },
		            { "data": "PRESENTACION" },
		            { "data": "ACCIONES" }
		        ]
		    } );
		
		
 });//fin document