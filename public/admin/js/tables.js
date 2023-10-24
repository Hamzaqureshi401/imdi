// Datatables

$(document).ready(() => {
 
    $("#example").DataTable({
      responsive: true,
    });
    $("#example3").DataTable({
      responsive: true,
      searching:true,
     
    });

    $("#batchtable").DataTable({
      responsive: true,
    });

    $('#batchtable tbody').on('click', 'tr', function () {
      if ($(this).hasClass('bg-primary text-white'))
       {
        $(this).removeClass('bg-primary text-white');
        $(this).find('td span').removeClass('selectedid');
      }
      else{
        $(this).addClass('bg-primary text-white');
        $(this).find('td span').addClass('selectedid');

      }
    });

    $("#example2").DataTable({
      scrollY: "292px",
      scrollCollapse: true,
      paging: false,
      searching: false,
      info: false,
    });

    // $('#mytb').DataTable({
    //   dom: 'lBfrtip', // Customize the layout if needed
    //   buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    //   initComplete: function () {
    //     this.api().columns().every(function () {
    //       var column = this;
    //       var filterIndex = $(column.header()).data('filter');
          
    //       var select = $('<select class="form-control"><option value=""></option></select>')
    //         .appendTo($(column.header()))
    //         .on('change', function () {
    //           var val = $.fn.dataTable.util.escapeRegex(
    //             $(this).val()
    //           );
    //           column
    //             .search(val ? '^' + val + '$' : '', true, false)
    //             .draw();
    //         });
          
    //       column.data().unique().sort().each(function (d, j) {
    //         select.append('<option value="' + d + '">' + d + '</option>');
    //       });
    //     });
    //   }
    // });

    $('#mytb').DataTable({
    dom: 'lBfrtip', // Customize the layout if needed
    buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    initComplete: function () {
        var api = this.api();

        // Remove individual column search inputs
        api.columns().every(function () {
            $(this.footer()).find('input').remove();
        });

        // Add a single global search input
        var globalSearchInput = $('<input class="form-control" type="text" placeholder="Search all columns"/>')
            .appendTo($(this.table().container()))
            .on('keyup change', function () {
                api.search(this.value).draw();
            });
    }
});
  
});
