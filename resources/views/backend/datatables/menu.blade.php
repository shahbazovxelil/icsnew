<script>
    var table = $('#datatable').DataTable({
        pageLength: 10,
        language: {
            url: '{{ asset('backend/js/az.json') }}'
        },
        ajax: {
            url:  '{{ route('backend.fetch.menus') }}',
            type: 'GET'
        },
        serverSide: true,
        processing: true,
        aaSorting: [[0, false]],
        columns: [

            {data: 'iteration'},
            {data: 'id'},
            {data: 'name'},
            {data: 'slug'},
            {data: 'locale'},
            {data: 'actions'},
            {data: 'languages'},
            {data: 'status'},

        ],
        columnDefs: [
            {
                'targets':   [0,5,6,7],
                'orderable': false
            }
        ]
    })

    $(document).on('click', '.delete', function(e) {
        e.preventDefault()
        const url = $(this).attr('href')
        const xx = $(this).parent().parent();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:  url,
                    type: 'POST',
                    data: {_method: 'DELETE', _token: '{{ csrf_token() }}'},
                    success: function (res) {
                        if (res.success == 1) {
                            xx.remove();
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    }
                })
            }
        })

    });

    $('body').on('click', '.status-btn', function(e) {
        e.preventDefault();
        const url = $(this).attr('href')
        var $btn = $(this);
        var id = $btn.data('id');
        var status = $btn.data('status') === 'active' ? 0 : 1;
        $.ajax({
            url: url,
            method: 'POST',
            data: {
                status: status,
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {
                console.log(response);

                if (response.success) {
                    $btn.removeClass('btn-success btn-danger')
                        .addClass('btn-' + (status ? 'success' : 'danger'))
                        .data('status', status)
                        .text(status ? 'Active' : 'Deactive');
                }
            },
            error: function() {
                alert('An error occurred while updating the status.');
            }
        });
    });


</script>

