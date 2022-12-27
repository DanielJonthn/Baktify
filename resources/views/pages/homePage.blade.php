@extends('temp')

@section('title', 'Home')
{{-- Nggak pasti, tanyain dulu --}}
<style>
    .linefade{
    display:block;
    border:none;
    color:white;
    height:1px;
    background:black;
    background: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 700, from(#000), to(#fff));
    }
</style>

@section('content')    
<div>
    {{-- {{dd(Auth::check())}} --}}
    {{-- Upper Part --}}
    <div class="d-flex justify-content-center my-5">
        <h1 class="text-wrap text-center" style="width: 300px">Level Up Your Music Collection</h1>
    </div>
    
    <div class="d-flex justify-content-center my-5">
        <img src="/assets/HomeAlbum.jpg" style="width: 700px" alt="">
    </div>
    
    {{-- Bottom Part --}}
    <div class="d-flex flex-column text-center my-5">
        <div class="linefade"></div>
        <h4>One-stop store for all your musical enthusiasm needs</h4>
        <h6 style="color: grey">We provide wide variety of music genre and album</h6>
    </div>
    
    {{-- <div class="bg-white py-5">
        <div class="px-5 py-5">
          <div class="d-flex flex-row align-items-center mb-5">
            <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
              <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
              <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
            </div>
            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="/assets/HomeImage1.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
          </div>
          <div class="d-flex flex-row align-items-center">
            <div class="col-lg-5 px-5 mx-auto"><img src="/assets/HomeImage2.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
              <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
              <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
            </div>
          </div>
        </div>
    </div> --}}

    <div class="my-5">
        <div style="margin-left: 150px; margin-right: 150px">
            <div class="d-flex align-items-center my-5">
                <div class="text-end me-5">
                    <h2>Security</h2>
                    <p class="text-secondary">We are proud to offer fast and professional delivery services with all major payment methods available through our online shop. Additionally, if you require some flexibility regarding payment, we provice finance options so you can pay in installments</p>
                </div>
                <div class="col-lg-5 px-5 mx-auto"><img src="/assets/HomeImage1.jpg" alt="" class="img-fluid rounded mb-4 mb-lg-0"></div>
                {{-- <img class="rounded" style="width: 500px" src="/assets/HomeImage1.jpg" alt=""> --}}
            </div>
            <div class="d-flex align-items-center my-5">
                <div class="col-lg-5 px-5 mx-auto"><img src="/assets/HomeImage2.jpg" alt="" class="img-fluid rounded mb-4 mb-lg-0"></div>
                {{-- <img class="rounded" style="width: 500px" src="/assets/HomeImage2.jpg" alt=""> --}}
                <div class="text-start ms-5">
                    <h2>Bulk Ordering Makes It Possible</h2>
                    <p class="text-secondary">Through the large purchasin volumes, DV and Music Store are able to source containers directly from manufactures worldwide allowing us to offer a large range of products at sensationally low prices.</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection