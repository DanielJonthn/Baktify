@extends('temp')

@section('title', 'Product')

<!-- <style>
.second {
  /* required */
  position: relative;
  z-index: 1;
}
</style> -->

@section('content')
<!-- Member/Guest -->
{{-- <div class="container">

    <div class="d-flex justify-content-between align-items-center my-5">
        <div>
            <h3 class="fw-bold m-0">OUR PRODUCTS</h3>
        </div> 
        <div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

        <div class="row row-cols-4">
            @for($i = 0;$i < 10; $i++)
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <img src="/assets/UntilIFoundYou.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a class="stretched-link" href="{{route('productdetail')}}"></a>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title" style="z-index: 1">Album Title</h5>
                            <p class="card-text" style="color: gray; z-index: 1">Price: Rp</p>
                            <p class="card-text bg-primary p-2" style="border-radius:50px; z-index: 1">Genre</p>
                        </div>
                        <hr>
                    <div class="d-flex" style="transform: (0)">
                        <a href="{{route('cart')}}" class="btn btn-primary m-0" style="border-radius: 50px; font-size: 13px; z-index: 1">Add to cart</a>
                    </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
</div> --}}

{{-- Admin --}}
<div class="container">

    <div class="d-flex justify-content-between align-items-center my-5">
        <div>
            <h3 class="fw-bold m-0">OUR PRODUCTS</h3>
        </div> 
        <div class="d-flex">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a class="btn btn-info ms-3" href="{{route('addproduct')}}">Insert Product</a>
        </div>
    </div>

        <div class="row row-cols-4">
            @for($i = 0;$i < 10; $i++)
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <img src="/assets/UntilIFoundYou.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a class="stretched-link" href="{{route('productdetail')}}"></a>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title" style="z-index: 1">Album Title</h5>
                            <p class="card-text" style="color: gray; z-index: 1">Price: Rp</p>
                            <p class="card-text bg-primary p-2" style="border-radius:50px; z-index: 1">Genre</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between" style="transform: (0)">
                            <a href="{{route('editproduct')}}" class="btn btn-primary m-0" style="border-radius: 50px; font-size: 13px; z-index: 1">Edit Product</a>
                            <a href="#" class="btn btn-danger m-0" style="border-radius: 50px; font-size: 13px; z-index: 1">Remove Product</a>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
</div>
@endsection