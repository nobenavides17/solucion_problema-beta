

		function traerModulosEnlacesConCheck(){
			
				var ajaxdata={"action":"traer_modulos_enlaces"}
				$.ajax({
					type:"POST",
					url : "acciones/modificacion.permisos.action.php",
					data : ajaxdata ,
					success : function(data)
					{   
						$("#table-modulos-enlaces").append(data);
					},
					complete: function() 
					{}
				});
		}

		function registroUsuario(){
				var user = $("#username").val();
				var nombre = $("#nombre").val();
				var pass = $("#password").val();
				var consultaModulos="";
				var consultaEnlaces = "";
				
  

				var i=0;
				$(".modulo:checked").each(function(){

					if(i==0){
					 consultaModulos = consultaModulos +"('','"+$(this).val()+"','1','"+user+"')";
					}else{
					 consultaModulos = consultaModulos +","+"('','"+$(this).val()+"','1','"+user+"')";
					}
					i++;
				});


				var j=0;
				$(".enlace:checked").each(function(){
					if(j==0){
					 consultaEnlaces = consultaEnlaces +"('',"+$(this).val()+",'1','"+user+"')";					
					}else{
					 consultaEnlaces = consultaEnlaces +","+"('',"+$(this).val()+",'1','"+user+"')";					
					}
					j++;
				});


				var sqlEnlaces = "insert into permisos_enlaces values"+consultaEnlaces+";";
				var sqlModulos = "insert into permisos_modulos values"+consultaModulos+";";
				var sqlUsuario = "insert into usuarios values('','"+user+"','"+nombre+"','"+pass+"');";
				
				var ajaxdata={"action":"registro_usuario",
								"sqlUsuario":sqlUsuario,
								"sqlModulos": sqlModulos,
								"sqlEnlaces": sqlEnlaces}
				$.ajax({
					type:"POST",
					url : "acciones/usuarios.privilegios.action.php",
					data : ajaxdata ,
					success : function(data)
					{   
						$("body").append(data);
					},
					complete: function() 
					{}
				});
		}
	

		

$(document).ready(function(){

			traerModulosEnlacesConCheck();
		
 });//fin document