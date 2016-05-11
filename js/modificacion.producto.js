
		
	function datosProducto(id) {
			
			var ajaxdata={"action":"datos_producto",
							"id_producto": id}
				$.ajax({
					type:"POST",
					url : "acciones/modificacion.producto.action.php",
					dataType:'json',
					data : ajaxdata ,
					success : function(data)
					{   
						$('#codigo').val(data.codigo);
						$('#descripcion').val(data.descripcion);
						$('#presentacion').val(data.presentacion);
						$('#marca').val(data.marca);
						$('#color').val(data.color);
						$('#precio_1').val(data.precio_1);
						$('#precio_2').val(data.precio_2);
						$('#precio_3').val(data.precio_3);
						$('#id_producto').val(data.id_producto);

						$('#precios *').remove();

						if(data.precio_1 == data.precio_venta){
							$('#precios').append("<option selected id='option_1' value='"+data.precio_1+"'>"+data.precio_1+"</option>");
							$('#precios').append("<option id='option_2' value='"+data.precio_2+"'>"+data.precio_2+"</option>");
							$('#precios').append("<option id='option_3' value='"+data.precio_3+"'>"+data.precio_3+"</option>");
						}
						if(data.precio_2 == data.precio_venta){
							$('#precios').append("<option  id='option_1' value='"+data.precio_1+"'>"+data.precio_1+"</option>");
							$('#precios').append("<option selected id='option_2' value='"+data.precio_2+"'>"+data.precio_2+"</option>");
							$('#precios').append("<option id='option_3' value='"+data.precio_3+"'>"+data.precio_3+"</option>");
						}
						if(data.precio_3 == data.precio_venta){
							$('#precios').append("<option  id='option_1' value='"+data.precio_1+"'>"+data.precio_1+"</option>");
							$('#precios').append("<option  id='option_2' value='"+data.precio_2+"'>"+data.precio_2+"</option>");
							$('#precios').append("<option selected id='option_3' value='"+data.precio_3+"'>"+data.precio_3+"</option>");
						}
						

						$('#estado').append("<option  value='"+data.estado+"' selected>"+data.estado+" </option>");

					},
					complete: function() 
					{}
				});
		}






		function modificacionProducto() {
			
			var ajaxdata=$("#form_mod_producto").serialize();
				$.ajax({
					type:"POST",
					url : "acciones/modificacion.producto.action.php",
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

				datosProducto($("#id_producto_modificar").val());
			});

			
		
		
 });//fin document