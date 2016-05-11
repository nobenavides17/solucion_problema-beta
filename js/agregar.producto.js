
		
	

		

		

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


		

		


		function registroProducto() {
			
			var ajaxdata=$("#form_add_producto").serialize();
				$.ajax({
					type:"POST",
					url : "acciones/agregar.producto.action.php",
					data : ajaxdata ,
					success : function(data)
					{   
						$("body").append(data);
						
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

			 $("#precio_1").blur(function(){
					 	var valorCaja = $(this).val();
					 

					 		var option_1 = $("#option_1");
					 		if((option_1.length) > 0){
					 				if(valorCaja==""){
					 					option_1.remove();
					 				}else{ option_1.text(valorCaja);option_1.val(valorCaja);}

						 	}else{$("#precios").append("<option id='option_1' value='"+valorCaja+"'>"+valorCaja+"</option>");}
					 	
						 	
			 	
             });

             $("#precio_2").blur(function(){
					 	var valorCaja = $(this).val();
					 

					 		var option_1 = $("#option_2");
					 		if((option_1.length) > 0){
					 				if(valorCaja==""){
					 					option_1.remove();
					 				}else{ option_1.text(valorCaja);option_1.val(valorCaja);}

						 	}else{$("#precios").append("<option id='option_2' value='"+valorCaja+"'>"+valorCaja+"</option>");}
					 	
						 	
			 	
             });

             $("#precio_3").blur(function(){
					 	var valorCaja = $(this).val();
					 

					 		var option_1 = $("#option_3");
					 		if((option_1.length) > 0){
					 				if(valorCaja==""){
					 					option_1.remove();
					 				}else{ option_1.text(valorCaja);option_1.val(valorCaja);}

						 	}else{$("#precios").append("<option id='option_3' value='"+valorCaja+"'>"+valorCaja+"</option>");}
					 	
						 	
			 	
             });

			$(function(){
			});

			
		
		
 });//fin document