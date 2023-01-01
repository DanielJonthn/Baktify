@extends('temp')

@section('title', 'Home')

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
    <div class="my-5">
        <div style="margin-left: 150px; margin-right: 150px">
            <div class="d-flex align-items-center my-5">
                <div class="text-end me-5">
                    <h2>Security</h2>
                    <p class="text-secondary">We are proud to offer fast and professional delivery services with all major payment methods available through our online shop. Additionally, if you require some flexibility regarding payment, we provice finance options so you can pay in installments</p>
                </div>
                <div class="col-lg-5 px-5 mx-auto"><img src="/assets/HomeImage1.jpg" alt="" class="img-fluid rounded mb-4 mb-lg-0"></div>
            </div>
            <div class="d-flex align-items-center my-5">
                <div class="col-lg-5 px-5 mx-auto"><img src="/assets/HomeImage2.jpg" alt="" class="img-fluid rounded mb-4 mb-lg-0"></div>
                <div class="text-start ms-5">
                    <h2>Bulk Ordering Makes It Possible</h2>
                    <p class="text-secondary">Through the large purchasin volumes, DV and Music Store are able to source containers directly from manufactures worldwide allowing us to offer a large range of products at sensationally low prices.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    if('{{Session::has('alert')}}'){
        alert('{{Session::get('alert')}}');
    }
</script>
@endsection