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
<div class="container">

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
            {{-- @for($i = 0;$i < 10; $i++)
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <img src="/assets/UntilIFoundYou.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a class="stretched-link" href="{{route('productdetail', $product->id)}}"></a>
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
            @endfor --}}
            @foreach ($products as $product)
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <img src="/assets/{{$product->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a class="stretched-link" href="{{route('productdetail', $product->id)}}"></a>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h6 class="card-title" style="z-index: 1">{{$product->name}}</h6>
                            <p class="card-text" style="color: gray; z-index: 1">IDR {{$product->price}}</p>
                            <p class="card-text text-white bg-primary p-2 px-3" style="border-radius:50px; z-index: 1; font-size: 80%;">{{$product->category->name}}</p>
                        </div>
                        <hr>
                        <div class="d-flex" style="transform: (0)">
                            <a href="{{route('addtocart', $product->id)}}" class="btn btn-primary m-0" style="border-radius: 50px; font-size: 13px; z-index: 1">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>

{{-- Admin --}}
<div class="container">

    <div class="d-flex justify-content-between align-items-center my-5">
        <div>
            <h3 class="fw-bold m-0">OUR PRODUCTS</h3>
        </div> 
        <div class="d-flex">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search product" aria-label="Search">
                <button class="btn text-white" style="background-color: #5e5df0" type="submit">Search</button>
            </form>
            <a class="btn ms-3 text-white" style="background-color: #5da5f0" href="{{route('addproduct')}}">Insert Product</a>
        </div>
    </div>

        <div class="row row-cols-4">
            @foreach ($products as $product)
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <img src="/assets/{{$product->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a class="stretched-link" href="{{route('productdetail', $product->id)}}"></a>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h6 class="card-title" style="z-index: 1">{{$product->name}}</h6>
                            <p class="card-text" style="color: gray; z-index: 1">IDR {{$product->price}}</p>
                            <p class="card-text text-white p-2 px-3" style="border-radius:50px; z-index: 1; font-size: 80%; background-color: #5e5df0;">{{$product->category->name}}</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between" style="transform: (0)">
                            <a href="{{route('editproduct', $product->id)}}" class="btn m-0 text-white px-3" style="border-radius: 50px; font-size: 13px; z-index: 1; background-color: #5da5f0">Edit Product</a>
                            <a href="{{route('removeproduct', $product->id)}}" class="btn btn-danger m-0" style="border-radius: 50px; font-size: 13px; z-index: 1">Remove Product</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection