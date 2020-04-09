@extends('layout.master')

@section('bootstrap')
    <!--MDBootstrap-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/mdb.min.css') }}">
    <!--SBAdmin-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/sb-admin-2.css') }}">
@endsection


@section('content')
<div>
    
    <div class="jumbotron mb-0">
        <div class="container my-5">
            <div class="row">

                <div class="col-5">
                    <h1 class="display-4">We're The Next Generation of Real Estate Agents</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

                </div>

                <div class="col-7">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/prop1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="/img/prop2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="/img/prop3.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div><!--Col-->
            </div><!--Row-->

            <hr class="my-5">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-md " href="#" role="button">Learn more</a>
        </div><!--Container-->
    </div><!--Jumbo-->
    
    <div class="p-4 bg-dark">
        <div class="container text-center">
            <h4 class="p-2 text-white">FIND YOU NEW PLACE</h4>
            <p class="size-2">Dapatkan kemudahan dalam mencari tempat untuk sewa, beli dan jual </p>

        </div>
    </div>

    <div class="container py-5 mb-5">
        <h3 class="text-center mb-5">Features</h3>
        <div class="row">

            <div class="mx-auto" style="width: 18rem;">
                <div class="card-body">
                    <span class="align-center">
                        <i class="fas fa-map-marker-alt fa-4x"></i>
                    </span>
                    <h5 class="card-title mt-3"><b>Location</b></h5>
                    <p class="card-text">Dapat mengetahui dengan mudah lokasi bangunan</p>
                </div>
            </div>

            <div class="mx-auto" style="width: 18rem;">
                <div class="card-body">
                    <span class="align-center">
                        <i class="fas fa-wallet fa-4x"></i>
                    </span>
                    <h5 class="card-title mt-3"><b>No Comissions</b></h5>
                    <p class="card-text">Dapat mengetahui dengan mudah lokasi bangunan</p>
                </div>
            </div>

            <div class="mx-auto" style="width: 18rem;">
                <div class="card-body">
                    <span class="align-center">
                        <i class="fas fa-search fa-4x"></i>
                    </span>
                    <h5 class="card-title mt-3"><b>View</b></h5>
                    <p class="card-text">Dapat mengetahui dengan mudah lokasi bangunan</p>
                </div>
            </div>

        </div>
    </div>
    
    <!-- OUR ROOMS -->
    <div class="bg-white py-4 shadow"> <!--BG-->
        <div  class="container"> <!--Container-->
            <h3 class="text-center mb-5 pt-3">Our Rooms</h3>
            
            <div class="row">
                <!-- Card Room -->
                <div class="card mx-auto shadow" style="width: 21rem;">
                    <div class="view overlay zoom">
                        <img src="/img/prop1.jpg" class="card-img-top img-fluid" alt="..." style="height:210px;">
                        <div class="mask flex-center rgba-black-strong">
                            <button class="btn btn-outline-light px-5">View</button>
                        </div>
                    </div>
                    
                    <div class="card-body pb-1 text-center">
                        <!--Judul-->
                        <a href="#" class="card-title text-dark text-decoration-none"><h4 class="m-0">Modern Style</h4>
                            <!--Harga-->
                            <p class="card-subtitle text-muted mt-1">Price : <strong>IDR. 2 JT</strong>/per malam</p>
                        </a><hr>

                        <!--Deskripsi-->
                        <p class="card-text mt-2 mb-3 p-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <!--Fasilitas-->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item pt-2 pb-2"><i class="fas fa-male mr-2"></i>5 Orang</li>
                            <li class="list-group-item pt-2 pb-2"><i class="fas fa-bed mr-2"></i>2 Kasur</li>
                            <li class="list-group-item pt-2 pb-2"><i class="fas fa-bath mr-2"></i>2 Bathroom</li>
                        </ul>
                    </div>
                    <div class="card-body pt-1">
                        <a href="#" class="card-link d-inline-block" style="margin-top:13px;">View Detail</a>
                        <a href="#" class="card-link btn btn-primary float-right">Sewa</a>
                    </div>
                </div>


                <div class="card mx-auto shadow" style="width: 21rem;">
                    <div class="view overlay zoom">
                        <img src="/img/prop2.jpg" class="card-img-top img-fluid" alt="..." style="height:210px;">
                        <div class="mask flex-center rgba-black-strong">
                            <button class="btn btn-outline-light px-5">View</button>
                        </div>
                    </div>
                    <div class="card-body pb-1 text-center">
                        <!--Judul-->
                        <a href="#" class="card-title text-dark text-decoration-none"><h4 class="m-0">Modern Style</h4>
                            <!--Harga-->
                            <p class="card-subtitle text-muted mt-1">Price : <strong>IDR. 1,1 JT</strong>/per malam</p>
                        </a><hr>

                        <!--Deskripsi-->
                        <p class="card-text mt-2 mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <!--Fasilitas-->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item pt-2 pb-2"><i class="fas fa-male mr-2"></i>2 Orang</li>
                            <li class="list-group-item pt-2 pb-2"><i class="fas fa-bed mr-2"></i>1 Kasur Besar</li>
                            <li class="list-group-item pt-2 pb-2"><i class="fas fa-bath mr-2"></i>1 Bathroom</li>
                        </ul>
                    </div>
                    <div class="card-body pt-1">
                        <a href="#" class="card-link d-inline-block" style="margin-top:13px;">View Detail</a>
                        <a href="#" class="card-link btn btn-primary float-right">Sewa</a>
                    </div>
                </div>

                <div class="card mx-auto shadow" style="width: 21rem;">
                    <div class="view overlay zoom">
                        <img src="/img/prop3.jpg" class="card-img-top img-fluid" alt="..." style="height:210px;">
                        <div class="mask flex-center rgba-black-strong">
                            <button class="btn btn-outline-light px-5">View</button>
                        </div>
                    </div>
                    <div class="card-body pb-1 text-center">
                        <!--Judul-->
                        <a href="#" class="card-title text-dark text-decoration-none"><h4 class="m-0">Modern Style</h4>
                            <!--Harga-->
                            <p class="card-subtitle text-muted mt-1">Price : <strong>IDR. 700 RB</strong>/per malam</p>
                        </a><hr>

                        <!--Deskripsi-->
                        <p class="card-text mt-2 mb-3 p-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <!--Fasilitas-->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item pt-2 pb-2"><i class="fas fa-male mr-2"></i>1 Orang</li>
                            <li class="list-group-item pt-2 pb-2"><i class="fas fa-bed mr-2"></i>1 Kasur</li>
                            <li class="list-group-item pt-2 pb-2"><i class="fas fa-bath mr-2"></i>1 Bathroom</li>
                        </ul>
                    </div>
                    <div class="card-body pt-1">
                        <a href="#" class="card-link d-inline-block" style="margin-top:13px;">View Detail</a>
                        <a href="#" class="btn btn-primary float-right">Sewa</a>
                    </div>
                </div>
            </div><!--End Our Rooms-->

            <div class="text-center mt-4">
                <a href="#" class="h4 btn mx-auto btn-lg shadow-none">More <i class="fas fa-arrow-down"></i></a>
            </div>

        </div><!--End Container-->
    </div><!--End BG-->





</div><!--End Body-->
@endsection

