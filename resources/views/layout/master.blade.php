<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyebaran Virus Corona</title>
    <link rel="icon" href="{{ URL::asset('/img/smk.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/sb-admin-2.css') }}">
</head>
<body>
    
    @include('layout/components.navigation')
    @yield('content')

    <!-- Footer -->
    <footer class="sticky-footer bg-primary" style="margin-top:105px;">
    <div class="container my-auto">
        <div class="copyright text-center my-auto text-white">
        <span>Copyright &copy; _muhammadfahru</span>
        </div>
    </div>
    </footer>
    <!-- End of Footer -->

</body>
</html>