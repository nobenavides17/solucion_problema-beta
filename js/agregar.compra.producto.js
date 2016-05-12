

		function borrarFila(numero){
			$("#"+numero).remove();
		}


		function subtotal(id){
			var cantidad = parseFloat($("#listado tbody #"+id).find("#cantidad").val()).toFixed(2);
			var precio = parseFloat($("#listado tbody #"+id).find("#precio_compra").val()).toFixed(2);
			 var subtotal = cantidad*precio;

			 $("#listado tbody #"+id).find("#p").text(subtotal);
		}
		function registroCompra(codigo , cantidad, precio, proveedor, fecha, subtotal, factura){

					var ajaxdata={"action": "ingreso_compra",
									"id_producto": codigo,
									"cantidad":cantidad,
									"precio_unitario":precio,
									"id_proveedor":proveedor,
									"fecha":fecha,
									"num_factura":factura,
									"subtotal":subtotal};
					var cadena ="";
								$.ajax({
									type:"POST",
									url : "acciones/agregar.compra.producto.action.php",
									
									data : ajaxdata ,
									success : function(data)
									{
										alert(data);
									},
									complete: function() 
									{}
								});
		}

		function proveedores(){

					var ajaxdata={"action": "datos_proveedores"
									};
					
								$.ajax({
									type:"POST",
									url : "acciones/agregar.compra.producto.action.php",
									
									data : ajaxdata ,
									success : function(data)
									{
										$("#proveedor").append(data);
									},
									complete: function() 
									{}
								});
		}

		
		function traerFila(codigo){

			var ajaxdata={"action": "traer_fila",
							"codigo": codigo};
						$.ajax({
							type:"POST",
							url : "acciones/agregar.compra.producto.action.php",
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

		function comprarProductos(){
			var cadena = "";
					var id_proveedor = $("#proveedor").val();
					var fecha = $("#fecha").val();
					var num_factura = $("#factura").val();

			$("#listado tbody tr").each(function(){

					var id_producto = $(this).find("#id_producto").val();
					var cantidad = $(this).find("#cantidad").val();
					var precio_unitario = $(this).find("#precio_compra").val();
					
					var subtotal = $(this).find("#p").text();
					registroCompra(id_producto,cantidad,precio_unitario,id_proveedor,fecha,subtotal,num_factura);
					
				});
		}


$(document).ready(function(){

		$( "#producto" ).autocomplete({
					      source: "autocomplete/agregar.compra.producto.autocomplete.php",
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
		proveedores();

		
		// $(document).on('keyup', '#cantidad', function() {
		//    			var cantidad = parseFloat($(this).val()).toFixed(2); 
		// 			var precio = parseFloat($("#precio_compra").val()).toFixed(2); 
		// 			var multi = cantidad*precio;
					
		// 			$("#subtotal").text(String(multi));
		// });

		// $(document).on('keyup', '#precio_compra', function() {
		//    			var cantidad = parseFloat($("#cantidad").val()).toFixed(2); 
		// 			var precio =parseFloat($(this).val()).toFixed(2); 
		// 			var multi = cantidad*precio;
					
		// 			$("#subtotal").text(String(multi));
		// });

		$(function() {
    		$("#fecha" ).datepicker();
  		});
 });//fin document