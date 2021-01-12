
//confirm-copy
$(document).on('click', '.confirm-copy', function(e) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
    })

    swalWithBootstrapButtons.fire({
        icon: 'question',
        title: 'نسخ المنتج',
        text: 'هل انت متأكد من نسخ المنتج سيتم انشاء منتج بنفس البيانات ؟',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            var id = $(this).attr('object_id');
            var repeat_url = $(this).attr('repeat_url');
            $.ajax({
                type: 'post',
                url: '/admin' + repeat_url + id,
                data: {
                    _method: 'Post',
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function(result) {
            swalWithBootstrapButtons.fire({
                title: 'تم تكرار المنتج بنجاح',
                showConfirmButton: false,
                timer: 1000
            });
             }
           });
            } else if (
                // / Read more about handling dismissals below /
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: 'تم إلإلغاء',
                    showConfirmButton: false,
                    timer: 1000
                });

            }
            })

});


//sucess-alert

$(document).on('click', '.success-alert', function(e) {
    Swal.fire({
        type: 'success',
        title: 'تم إضافته للسلة بنجاح',
        showConfirmButton: false,
        timer: 1500
    })
});
//remove-alert
$(document).on('click', '.remove-alert', function(e) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
    })
    swalWithBootstrapButtons.fire({
        icon: 'question',
        title: 'Are You Sure ?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            var id = $(this).attr('object_id');

            var d_url = $(this).attr('delete_url');
            var elem = $(this).parent('td').parent('tr');

            $.ajax({
                type: 'post',
                url: '/admin' + d_url + id,
                data: {
                    _method: 'delete',
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function(result) {
                    elem.remove();
                    swalWithBootstrapButtons.fire({
                        icon: 'success',
                        title: 'Deleted Successfully....',
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            });
        } else if (
            // / Read more about handling dismissals below /
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                icon: 'error',
                title: 'Cancelled',
                showConfirmButton: false,
                timer: 1000
            });

        }
    })

});


//hide-alert
$(document).on('click', '.hide-alert', function(e) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
    })
    swalWithBootstrapButtons.fire({
        icon: 'question',
        title: 'هل أنت متأكد؟',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            var id = $(this).attr('object_id');
            var hide_url = $(this).attr('hide_url');
            var elem = $(this).parent('td').parent('tr');
            var proelem = $(this).closest(".remove-oneitem")
            $.ajax({
                type: 'post',
                url: '/admin' + hide_url + id,
                data: {
                    _method: 'delete',
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function(result) {
                    elem.remove();
                    proelem.remove();
                    swalWithBootstrapButtons.fire({
                        title: 'تم اخفاء المنتج  بنجاح',
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            });
        } else if (
            // / Read more about handling dismissals below /
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                title: 'تم إلإلغاء',
                showConfirmButton: false,
                timer: 1000
            });

        }
    })

});



//delete All Records
$(document).on('click', '.delete-all', function(e) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
    })
    swalWithBootstrapButtons.fire({
        icon: 'question',
        title: 'Are You Sure ?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            var d_url = $(this).attr('delete_url');
            $.ajax({
                type: 'post',
                url: '/admin' + d_url,
                data: {
                    _method: 'delete',
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function(result) {
                    $("tbody").remove();
                    $(".pagination").remove();
                    swalWithBootstrapButtons.fire({
                        icon: 'success',
                        title: 'Deleted Successfully....',
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            });
        } else if (
            // / Read more about handling dismissals below /
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                icon: 'error',
                title: 'Cancelled',
                showConfirmButton: false,
                timer: 1000,
            });

        }
    })

});
//ban-alert
$(document).on('click', '.ban-alert', function(e) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
    })

    swalWithBootstrapButtons.fire({
        icon: 'question',
        title: 'هل أنت متأكد؟',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
    }).then((result) => {
        if (result.value) {
            swalWithBootstrapButtons.fire({
                title: 'تم الحظر  بنجاح',
                showConfirmButton: false,
                timer: 1000
            });
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                title: 'تم إلإلغاء',
                showConfirmButton: false,
                timer: 1000
            });

        }
    })

});

/****** delete all folder files **********/
$(document).on('click', '.delete-all-folderfile', function(e) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
    })
    swalWithBootstrapButtons.fire({
        icon: 'question',
        title: 'هل أنت متأكد؟',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            var d_url = $(this).attr('delete_url');
            var id = $(this).attr('object_id');
            $.ajax({
                type: 'post',
                url: '/admin' + d_url + id,
                data: {
                    _method: 'delete',
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function(result) {
                    $(".delete-all-cats").remove();
                    swalWithBootstrapButtons.fire({
                        title: 'تم الحذف  بنجاح',
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            });
        } else if (
            // / Read more about handling dismissals below /
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                title: 'تم إلإلغاء',
                showConfirmButton: false,
                timer: 1000
            });

        }
    })

});
