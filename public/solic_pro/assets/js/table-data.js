$(function(e) {

    //______Basic Data Table
    $('#basic-datatable').DataTable({
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
        }
    });


    //______Basic Data Table
    $('#responsive-datatable').DataTable({
        language: {
            searchPlaceholder: 'Search...',
            scrollX: "100%",
            sSearch: '',
        }
    });
    var table = $('#datatable-11').DataTable( {
		lengthChange: true,
		order:[[0,'desc']],
	} );
	table.buttons().container()
	.appendTo( '#datatable-11_wrapper .col-md-6:eq(0)');
    
    
	

    //______File-Export Data Table
    var table = $('#file-datatable').DataTable({
        buttons: [
            {
                extend: 'copy',
                exportOptions: {
                    columns: ':not(:last-child)' // Ignore la dernière colonne
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':not(:last-child)' // Ignore la dernière colonne
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':not(:last-child)' // Ignore la dernière colonne
                }
            },
            'colvis' // Bouton pour la visibilité des colonnes
        ],
        language: {
            searchPlaceholder: 'Search...',
            scrollX: "100%",
            sSearch: '',
        }
    });
    
    // Ajouter les boutons à l'interface
    table.buttons().container()
        .appendTo('#file-datatable_wrapper .col-md-6:eq(0)');
    

    //______Delete Data Table
    var table = $('#delete-datatable').DataTable({
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
        }
    });
    $('#delete-datatable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
    $('#button').click(function() {
        table.row('.selected').remove().draw(false);
    });
    $('#example2').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_ items/page',
		}
	});
	
	
    $('#example3').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );

    //______Select2 
	$('.select2').select2({
		placeholder: 'Choose one',
		searchInputPlaceholder: 'Search'
	});

});
