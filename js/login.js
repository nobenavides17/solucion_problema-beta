

		function selectSucursales(){
			
				var ajaxdata={"action":"selectSucursales"}
				$.ajax({
					type:"POST",
					url : "acciones/login.action.php",
					data : ajaxdata ,
					success : function(data)
					{   
						$("#sucursales").append(data);
					},
					complete: function() 
					{}
				});
		}
	


$(document).ready(function(){

			selectSucursales();
		
 });//fin document