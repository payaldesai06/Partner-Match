var token = $('#token').val();
$( document ).ready(function() {

    //listing page
    if($('#UserTableList').length){
        fetchData();
        function fetchData()
        {
            var url = "user/list";
            $.ajax({
                url:url,
                success:function(data)
                {
                    if($('#suggestions').length){
                        $('#suggestions').html(data);
                        $('#userTable').DataTable({
                            order: [[7, 'desc']],
                        });
                    }
                    if($('#users').length){
                        $('#users').html(data);
                        $('#userTable thead tr')
                            .clone(true)
                            .addClass('filters')
                            .appendTo('#userTable thead');
                        var table = $('#userTable').DataTable({
                            order: [[8, 'desc']],
                            orderCellsTop: true,
                            fixedHeader: true,
                            initComplete: function () {
                                var api = this.api();

                                // For each column
                                api
                                    .columns()
                                    .eq(0)
                                    .each(function (colIdx) {
                                        // Set the header cell to contain the input element
                                        var cell = $('.filters th').eq(
                                            $(api.column(colIdx).header()).index()
                                        );
                                        var title = $(cell).text();
                                        $(cell).html('<input type="text" placeholder="' + title + '" />');

                                        // On every keypress in this input
                                        $(
                                            'input',
                                            $('.filters th').eq($(api.column(colIdx).header()).index())
                                        )
                                            .off('keyup change')
                                            .on('change', function (e) {
                                                // Get the search value
                                                $(this).attr('title', $(this).val());
                                                var regexr = '({search})'; //$(this).parents('th').find('select').val();

                                                var cursorPosition = this.selectionStart;
                                                // Search the column for that value
                                                api
                                                    .column(colIdx)
                                                    .search(
                                                        this.value != ''
                                                            ? regexr.replace('{search}', '(((' + this.value + ')))')
                                                            : '',
                                                        this.value != '',
                                                        this.value == ''
                                                    )
                                                    .draw();
                                            })
                                            .on('keyup', function (e) {
                                                e.stopPropagation();

                                                $(this).trigger('change');
                                                $(this)
                                                    .focus()[0]
                                                    .setSelectionRange(cursorPosition, cursorPosition);
                                            });
                                    });
                            },
                        });
                    }
                }
            });
        }
    }
    if($('#slider-range').length){
        $( function() {
            $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 150000,
            values: [ 10000, 25000 ],
            slide: function( event, ui ) {
                $( "#expected_annual_income" ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
            }
            });
            $( "#expected_annual_income" ).val($( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        } );
    }

});
