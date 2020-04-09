@extends('layout.master')
@section('bootstrap')
    <!--MDBootstrap-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/mdb.min.css') }}">
    <!--SBAdmin-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/sb-admin-2.css') }}">  

    
@endsection

@section('content')
<div class="container mt-4">
    @include('layout/components.breadcrumb')
    <div class="row mt-3">
        <div class="col-lg-9 pr-3">

            <!-- Head -->
            <div class="bg-white p-3 mb-4 row">
                <div class="col">
                    <h2 class="grey-text ">Properties</h2>
                    <p>Showing 1 - 10 of 20</p>
                </div>
                <div class="col">
                    <select name="" id="" class="form-control float-right w-50 mt-3 ">
                        <option value="">Sort By</option>
                    </select>
                </div>
            </div>
            <!-- End -->

            <div class="row">
                <!-- Col Kiri -->
                <div class="col-sm-6">
                    <!-- Card -->
                    <div class="card mb-4" style="width: 100%;">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="/img/properties/img1.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- End Card Image -->

                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <div>    
                                <h5 class="card-title mb-1"><a href="#" class="text-decoration-none text-success stretched-link">Kingsford Villa</a><a href="#" class="badge badge-default float-right">FOR SALE</a></h5>
                                <p for="" class="mt-1 mb-2 text-truncate " style="font-size:13px;"><i class="fas fa-map-marker-alt mr-2 "></i>Cobble Hill 152 Smith St New York, NY 11201</p>
                            </div>
                            <!-- Text -->
                            <p class="card-text text-success mb-2" style="font-size:19px;">
                                IDR. 1.000.000
                            </p>
                            <div style="font-size:15px;">
                                <label for=""><i class="fas fw fa-bed mr-2"></i>beds 2</label>
                                <label for=""><i class="fas fw fa-bath mr-2 ml-3"></i>bath 1</label>
                                <label for=""><i class="fas fw fa-arrows-alt mr-2 ml-3"></i>2000 (m <sup>2</sup> )</label>
                            </div>
                        </div>
                    </div>
                    <!-- CardEnd -->


                    <!-- Card -->
                    <div class="card mb-4" style="width: 100%;">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="/img/properties/img2.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <div>    
                                <h5 class="card-title mb-1"><a href="#" class="text-decoration-none text-dark">Kingsford Villa</a><a href="#" class="badge badge-secondary float-right">FOR RENT</a></h5>
                                <p for="" class="mt-1 mb-2 text-truncate " style="font-size:13px;"><i class="fas fa-map-marker-alt mr-2 "></i>Cobble Hill 152 Smith St New York, NY 11201</p>
                            </div>
                            <!-- Text -->
                            <p class="card-text text-success mb-2" style="font-size:19px;">
                                IDR. 1.000.000
                            </p>
                            <div style="font-size:15px;">
                                <label for=""><i class="fas fw fa-bed mr-2"></i>beds 2</label>
                                <label for=""><i class="fas fw fa-bath mr-2 ml-3"></i>bath 1</label>
                                <label for=""><i class="fas fw fa-arrows-alt mr-2 ml-3"></i>2000 (m <sup>2</sup> )</label>
                            </div>
                        </div>
                    </div>
                    <!-- CardEnd -->
                    
                </div>
                <!-- Col Kiri -->
            
                <!-- Col Kanan -->
                <div class="col-sm-6">
                    <!-- Card -->
                    <div class="card mb-4" style="width: 100%;">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="/img/properties/img5.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <div>    
                                <h5 class="card-title mb-1"><a href="#" class="text-decoration-none text-dark">Kingsford Villa</a><a href="#" class="badge badge-secondary float-right">FOR RENT</a></h5>
                                <p for="" class="mt-1 mb-2 text-truncate " style="font-size:13px;"><i class="fas fa-map-marker-alt mr-2 "></i>Cobble Hill 152 Smith St New York, NY 11201</p>
                            </div>
                            <!-- Text -->
                            <p class="card-text text-success mb-2" style="font-size:19px;">
                                IDR. 1.000.000
                            </p>
                            <div style="font-size:15px;">
                                <label for=""><i class="fas fw fa-bed mr-2"></i>beds 2</label>
                                <label for=""><i class="fas fw fa-bath mr-2 ml-3"></i>bath 1</label>
                                <label for=""><i class="fas fw fa-arrows-alt mr-2 ml-3"></i>2000 (m <sup>2</sup> )</label>
                            </div>
                        </div>
                    </div>
                    <!-- CardEnd -->

                    <!-- Card -->
                    <div class="card mb-4" style="width: 100%;">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="/img/properties/img7.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <div>    
                                <h5 class="card-title mb-1"><a href="#" class="text-decoration-none text-dark">Kingsford Villa</a><a href="#" class="badge badge-default float-right">FOR SALE</a></h5>
                                <p for="" class="mt-1 mb-2 text-truncate " style="font-size:13px;"><i class="fas fa-map-marker-alt mr-2 "></i>Cobble Hill 152 Smith St New York, NY 11201</p>
                            </div>
                            <!-- Text -->
                            <p class="card-text text-success mb-2" style="font-size:19px;">
                                IDR. 1.000.000
                            </p>
                            <div style="font-size:15px;">
                                <label for=""><i class="fas fw fa-bed mr-2"></i>beds 2</label>
                                <label for=""><i class="fas fw fa-bath mr-2 ml-3"></i>bath 1</label>
                                <label for=""><i class="fas fw fa-arrows-alt mr-2 ml-3"></i>2000 (m <sup>2</sup> )</label>
                            </div>
                        </div>
                    </div>
                    <!-- CardEnd -->


                </div>
                <!-- Col Kanan -->
            </div>


            <!-- Row End -->
            <nav aria-label="Page navigation example">
            <ul class="pagination pg-blue justify-content-center mt-5">
                <li class="page-item ">
                <a class="page-link" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link">1</a></li>
                <li class="page-item active">
                <a class="page-link">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link">3</a></li>
                <li class="page-item ">
                <a class="page-link">Next</a>
                </li>
            </ul>
            </nav>
            <script>
                $('.page-item').click(function() {
                    $(this).addClass('active').siblings().removeClass('active');
                    });
            </script>



        </div>

        <!-- Kanan -->
        <div class="col-lg-3">
            <!-- Filter -->
            <div class="py-3">
                <h4 class="text-dark">Filter Properties</h4><hr class="hr-success mt-2">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum quas modi incidunt totam perferendis inventore ducimus assumenda quo rem.</p>
            </div>
            <!-- Filter End -->

            <!-- Search -->
            <div class="bg-white p-3 mb-5">
                <h4>Search By</h4><hr>
                <div class="form-group">
                    <label for="" style="font-size:17px;">Location</label>
                    <select name="" id="" class="form-control mb-2" style="font-size:13px;">
                        <option value="">Provinsi</option>
                    </select>
                    <select name="" id="" class="form-control" style="font-size:13px;">
                        <option value="">Kota</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="" style="font-size:17px;">Property Category</label>
                    <select name="" id="" class="form-control" style="font-size:13px;">
                        <option value="">All Category</option>
                        <option value="">Apartments</option>
                        <option value="">Office Space</option>
                        <option value="">Houses</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="" style="font-size:17px;">Property Type</label><br>
                    <!-- Default inline 1-->
                    <div class="custom-control custom-checkbox custom-control-inline" style="font-size:13px;">
                        <input type="checkbox" class="custom-control-input" id="defaultInline1">
                        <label class="custom-control-label" for="defaultInline1">For Sale</label>
                    </div>

                    <!-- Default inline 2-->
                    <div class="custom-control custom-checkbox custom-control-inline" style="font-size:13px;">
                        <input type="checkbox" class="custom-control-input" id="defaultInline2">
                        <label class="custom-control-label" for="defaultInline2">For Rent</label>
                    </div>
                </div>
                
                <div>
                    <label for="" style="font-size:17px;">Bedrooms</label>
                    <div  class="form-group row">
                        <div class="col pr-1">
                            <input type="number" class="form-control mr-1" style="font-size:13px;" placeholder="Min">
                        </div>
                        <div class="col pl-1">
                            <input type="number" class="form-control" style="font-size:13px;" placeholder="Max">
                        </div>
                    </div>
                </div>
                <div>
                    <label for="">Bathrooms</label>
                    <div  class="form-group row">
                        <div class="col pr-1">
                            <input type="number" class="form-control mr-1" style="font-size:13px;" placeholder="Min">
                        </div>
                        <div class="col pl-1">
                            <input type="number" class="form-control" style="font-size:13px;" placeholder="Max">
                        </div>
                    </div>
                </div>

            </div>
            <!-- Search -->

            <!-- Category -->
            <div>
                <h4>Category</h4><hr>
                <div class="form-group ">
                    <ul class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Apartments
                            <span class="badge badge-primary badge-pill">14</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Bungalows 
                            <span class="badge badge-primary badge-pill">10</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Commercial
                            <span class="badge badge-primary badge-pill">16</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Office Space 
                            <span class="badge badge-primary badge-pill">20</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Houses
                            <span class="badge badge-primary badge-pill">17</span>
                        </a>
                    </ul>
                </div>
            </div>

        </div>
        <!-- Kanan -->

    </div>
    

    
</div>
<!-- Container End -->
@endsection