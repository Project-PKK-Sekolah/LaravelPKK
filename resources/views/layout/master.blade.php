<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property</title>
    <link rel="icon" href="{{ URL::asset('/img/smk.png') }}" type="image/x-icon"/>
    @yield('bootstrap')
    
    <!--Fontawesome-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/fontawesome-free/css/all.min.css') }}">
    <style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    </style>
</head>
<body class="bg-light">
    
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

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>