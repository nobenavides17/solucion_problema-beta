
		
	

		



		

		


$(document).ready(function(){

		
			
			$(function(){
			});

			$('#table').DataTable( {
		        "ajax": "tablesAjax/tablelistado.compras.php",
		        "columns": [
		          
		            { "data": "FACTURA" },
		            { "data": "CODIGO" },
		            { "data": "DESCRIPCION" },
		            { "data": "MARCA" },
		             { "data": "CANTIDAD" },
		              { "data": "PROVEEDOR" },
		               { "data": "SUCURSAL" },
		            { "data": "ACCIONES." }
		        ]
		    } );
		
		
 });//fin document