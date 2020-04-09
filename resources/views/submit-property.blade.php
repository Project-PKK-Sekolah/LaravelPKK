@extends('layout.master')
@section('bootstrap')
    <!--MDBootstrap-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/mdb.min.css') }}">
    <!--SBAdmin-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/sb-admin-2.css') }}">  

@endsection
    
@section('content')
<div class="container">

    <div class="row mt-5">
        <div class="col-lg-8 bg-white p-4"><!--Kiri-->
            <h1>Submit Property</h1>
            <p>Allow your agents to submit their property listings from front-end using this submission form, beauty about this form is you as an admin has full control over this page. From backend, you can choose which custom fields this form will display here. You can add/edit/delete these fields easily from Custom fields setup section.</p>
            <p>NOTE: -</p>

            <ul class="list-group">
                <li class="list-group-item bg-light"><b>Enter Property Details</b></li>
                <li class="list-group-item">
                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Property Title<font class="text-danger">*</font></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Select Category</label>
                            <select class="form-control">
                                <option>Default select</option>
                                <option value="">Apartemen</option>
                                <option value="">Ruang Kerja</option>
                                <option value="">Rumah</option>
                                <option value="">Gudang</option>
                            </select>
                            <p class="pt-1"><sup>Select a category for you property</sup></p>
                        </div>
                    </div>

                    <h3 class="my-4">Locations</h3>
                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Provinsi<font class="text-danger">*</font></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Kota<font class="text-danger">*</font></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Alamat<font class="text-danger">*</font></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <!--Google map-->
                    <div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
                    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                    </div>

                    <h3 class="my-4">Property Information</h3>
                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Status<font class="text-danger">*</font></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Properti ini akan di<font class="text-danger">*</font></label><br>
                            <input type="radio" value=""> Jual
                            <input type="radio"  value=""> Beli
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Harga (Rp.)<font class="text-danger">*</font></label>
                            <input type="text" class="form-control" placeholder="Harga">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-5">
                            <label for="">Kamar<font class="text-danger">*</font></label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-5">
                            <label for="">Toilet<font class="text-danger">*</font></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Luas (M<sup>2</sup>)<font class="text-danger">*</font></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">MLS Number</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Property Description<font class="text-danger">*</font></label>
                            <textarea name="" id="" rows="3" class="form-control"></textarea>
                        </div>
                    </div>

                    <h3 class="mb-4">Images<font class="text-danger">*</font></h3>
                    <div class="form-group row">
                        <div class="col-10">
                            <div class="file-upload-wrapper">
                                <input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500"/>
                            </div>
                        </div>
                    </div>

                    <h3 class="mb-4">Video</h3>
                    <div class="form-group row">
                        <div class="col-10">
                            <label for="">Link Video</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <a href="" class="btn btn-success col-3">Save</a>
                        <a href="" class="btn btn-light text-dark col-3">Cancel</a>
                    </div>



                </li>
            </ul>
            <div class="border border-outline-dark p2">
                
            
            </div>
        </div><!--Kiri-->

        <!-- Sidebar -->
        <div class="col-lg-3 ml-4">
            <!-- Agent -->
            <div class="py-3">
                <h4 class="text-dark">Become An Agent</h4><hr class="hr-success mt-2">
                <p class="text-justify">You can become an agent by submitting a listing on our site. List your business on our site and get access to thousands of visitors we get everyday. You will be able to reach out to more people and that means more business.</p>
            </div>
            <!-- Agent -->

            <!-- Category -->
            <div>
                <h4>Blog Categories</h4><hr>
                <div class="form-group ">
                    <ul class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Apartments
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Bungalows 
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Commercial
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Office Space 
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Houses
                        </a>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>
<script>

</script>
@endsection
