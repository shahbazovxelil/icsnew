
@if (session()->has('success'))
    <script>
        iziToast.success({
            title:    '',
            message:  '{{ session('success') }}',
            position: 'topRight'
        });
    </script>
@endif

@if (session()->has('error'))
    <script>
        iziToast.error({
            title:    'Error',
            message:  '{{ session('error') }}',
            position: 'topRight'
        });
    </script>
@endif

@if (session()->has('warning'))
    <script>
        iziToast.warning({
            title:    'Warning',
            message:  '{{ session('warning') }}',
            position: 'topRight'
        });
    </script>
@endif
