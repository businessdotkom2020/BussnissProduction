$(document).ready(function () {
    $('.delete_all').on('click', function(e) {
        var allVals = [];
        $(".sub_chk:checked").each(function() {
            allVals.push($(this).attr('data-id'));
        });
        if(allVals.length <=0)
        {
            Swal.fire({
                icon: 'error',
                type: 'error',
                title: 'يرجى التحديد',
                showConfirmButton: false,
                timer: 1500
            })
        }  else {
            var check = confirm("هل انت متأكد من حذف ما تم تحديدة؟!");
            if(check == true){
                var join_selected_values = allVals.join(",");
                $.ajax({
                    url: $(this).data('url'),
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: 'ids='+join_selected_values,
                    success: function (data) {
                        if (data['success']) {
                            $(".sub_chk:checked").each(function() {
                                $(this).parents("tr").remove();
                            });
                            Swal.fire({
                                icon: 'success',
                                type: 'success',
                                title: 'تم الحذف بنجاح',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } else if (data['error']) {
                            Swal.fire({
                                icon: 'error',
                                type: 'error',
                                title: 'يوجد خطأ يرجى المحاولة مرة اخرى .....',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                type: 'error',
                                title: 'يوجد خطأ يرجى المحاولة مرة اخرى .....',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    },
                    error: function (data) {
                        Swal.fire({
                            icon: 'error',
                            type: 'error',
                            title: 'يوجد خطأ يرجى المحاولة مرة اخرى .....',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                });
                $.each(allVals, function( index, value ) {
                    $('table tr').filter("[data-row-id='" + value + "']").remove();
                });
            }
        }
    });
});