
		
	

		



		

		


$(document).ready(function(){

		
			
			$(function(){
			});

			$('#table').DataTable( {
		        "ajax": "tablesAjax/tablelistado.inventario.php",
		        "columns": [
		          
		            { "data": "CODIGO" },
		            { "data": "DESCRIPCION" },
		            { "data": "MARCA" },
		            { "data": "PRESENTACION" },
		             { "data": "STOCK" },
		              { "data": "PRECIO" },
		            { "data": "ACCIONES" }
		        ]
		    } );
		
		
 });//fin document