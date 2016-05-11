$.extend( true, $.fn.dataTable.defaults, {
   	       "oLanguage": { "sEmptyTable": "No hay registros disponibles", 
				   	       "sInfo": "Mostrando de _START_ a _END_ de un total de: _TOTAL_ registros.", 
				   	       "sLoadingRecords": "Buscando datos, por favor espere...", 
				   	       "sSearch": "Buscar:", 
				   	       "sLengthMenu": "Mostrar: _MENU_", 
				   	       "oPaginate": { "sLast": "Última página", 
								   	       "sFirst": "Primera", 
								   	       "sNext": "Siguiente",
								   	        "sPrevious": "Anterior" } 
				   	    }

} );


function redireccion(url) {
			window.location=url;
		}


$.datepicker.regional['es'] = 
 {
 closeText: 'Cerrar', 
 prevText: 'Previo', 
 nextText: 'Próximo',
 
 monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
 'Jul','Ago','Sep','Oct','Nov','Dic'],
 monthStatus: 'Ver otro mes', yearStatus: 'Ver otro año',
 dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
 dateFormat: 'dd/mm/yy', firstDay: 0, 
 initStatus: 'Selecciona la fecha', isRTL: false
};
$.datepicker.setDefaults($.datepicker.regional['es']);