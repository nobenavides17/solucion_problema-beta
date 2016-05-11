

		
		function registroInventario(codigo , precio){

					var ajaxdata={"action": "ingreso_inventario",
									"id_producto": codigo,
									"precio_venta":precio};
					var cadena ="";
								$.ajax({
									type:"POST",
									url : "acciones/agregar.producto.inventario.action.php",
									async: false,
									data : ajaxdata ,
									success : function(data)
									{},
									complete: function() 
									{}
								});
		}

		
		function traerFila(codigo){

			var ajaxdata={"action": "traer_fila",
							"codigo": codigo};
						$.ajax({
							type:"POST",
							url : "acciones/agregar.producto.inventario.action.php",
							data : ajaxdata ,
							success : function(data)
							{   
								$("#tbody").append(data);
							},
							complete: function() 
							{
								
							}
						});
		}

		function ingresarProductos(){
			var cadena = "";
			$("#listado tbody tr").each(function(){

					var id_producto = $(this).find("#id_producto").val();
					var codigo = $(this).find("#codigo").val();
					var descripcion = $(this).find("#descripcion").val();
					var precio = $(this).find("#select_precio").val();
					var registro = registroInventario(id_producto,precio);
				});
			alert("Productos agregados a Inventario.");
		}


$(document).ready(function(){

			$( "#producto" ).autocomplete({
					      source: "autocomplete/agregar.producto.inventario.autocomplete.php",
        					minLength: 1
					    });
		
		$("#producto").blur(function(){
					 var valorCaja = $(this).val();
					 var caja = valorCaja.split("(");
					 var caja2 = caja[1];
					 var caja3 = caja2.split(")");
					 var codigo = caja3[0];
					 traerFila(codigo);
             });

 });//fin document