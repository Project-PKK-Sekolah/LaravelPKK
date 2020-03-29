<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="{{ URL::asset('/img/logo cadisdik 7.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/sb-admin-2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('fontawesome-free/css/all.min.css') }}">    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/aos.css') }}">   
    <script src="{{ URL::asset('/js/aos.js') }}"></script>
</head>
<body id="page-top">	
    <!-- NAVBAR -->
    <div class="navigation-wrap bg-primary start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                    
                        <a class="navbar-brand" href="" target="_blank"><img src="/img/smk.png" ></a>	
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link" href="#" >Home</a>                                
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Instagram</a>
                                        <a class="dropdown-item" href="#">Email</a>
                                        <a class="dropdown-item" href="#">Facebook</a>
                                    </div>
                                </li>
                            </ul>
                        </div>                    
                    </nav>		
                </div>
            </div>
        </div>
    </div>
    <!-- END OF NAVBAR -->

    <!-- CONTENT -->    

        

        <!-- Footer -->
        <footer class="sticky-footer bg-primary">
            <div class="container my-auto">
            <div class="copyright text-center my-auto text-white">
                <span>Copyright &copy; PKK</span>
            </div>
            </div>
        </footer>
        <!-- End of Footer -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


    <!-- Animate On Scroll -->
    <script type="text/javascript">
        AOS.init({
            duration : 1200,
        })
    </script>
    
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="{{ URL::asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script type="text/javascript" src="{{ URL::asset('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="{{ URL::asset('/js/sb-admin-2.js') }}"></script>   

    <script type="text/javascript" src="{{ URL::asset('/js/style.js') }}"></script> 

</body>
</html>