@extends('temp')

@section('title', 'Product')

@section('content')
{{-- Member/Guest --}}
@if(!Auth::check() || Auth::user()->role == 'Member')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div>
            <h3 class="fw-bold m-0">OUR PRODUCTS</h3>
        </div>
        <div>
            <form class="d-flex" action="{{ route('product') }}" method="GET">
                <input class="form-control me-2" name="search" type="search" placeholder="Search product" aria-label="Search">
                <button class="btn text-white" style="background-color: #5e5df0" type="submit">Search</button>
            </form>
        </div>
    </div>

    @if(Session::has('notFound'))
    <div style="height: 100vh">
        <h5>No product match for '{{Session::get('notFound')}}'</h5>
    </div>
    @else
        <div class="row row-cols-4">
            @foreach ($products as $product)
            @if($product->is_deleted == 0)
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{('/storage/images/'.$product->image)}}" class="card-img-top" style="max-height: 285px" alt="...">
                    <div class="card-body">
                        <a class="stretched-link" href="{{route('productdetail', $product->id)}}"></a>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h6 class="card-title" style="z-index: 1">{{$product->name}}</h6>
                            <p class="card-text" style="color: gray; z-index: 1">IDR {{$product->price}}</p>
                            <p class="card-text text-white p-2 px-3" style="border-radius:50px; z-index: 1; font-size: 80%; background-color: #5e5df0">{{$product->category->name}}</p>
                        </div>
                        <hr>
                        @if($product->stock == 0)
                        <div class="d-flex" style="transform: (0)">
                            <p class="m-0 p-1" style="z-index: 1;">Product Unavailable</p>
                        </div>
                        @else
                        <div class="d-flex" style="transform: (0)">
                            <a href="{{route('addtocart', $product->id)}}" class="btn text-white m-0" style="border-radius: 50px; font-size: 13px; z-index: 1; background-color: #5da5f0">Add to cart</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <p class="m-0">Showing 1 to {{count($products)}} of {{count($totalproducts)}} results</p>
            {{$products->links()}}
        </div>
    @endif
</div>

{{-- Admin --}}
@elseif(Auth::user()->role == 'Admin')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div>
            <h3 class="fw-bold m-0">OUR PRODUCTS</h3>
        </div> 
        <div class="d-flex">
            <form class="d-flex" action="{{ route('product') }}" method="GET">
                <input class="form-control me-2" name="search" type="search" placeholder="Search product" aria-label="Search">
                <button class="btn text-white" style="background-color: #5e5df0" type="submit">Search</button>
            </form>
            <a class="btn ms-3 text-white" style="background-color: #5da5f0" href="{{route('addproduct')}}">Insert Product</a>
        </div>
    </div>

    @if(Session::has('notFound'))
    <div style="height: 100vh">
        <h5>No product match for '{{Session::get('notFound')}}'</h5>
    </div>
    @else
        <div class="row row-cols-4">
            @foreach ($products as $product)
            @if($product->is_deleted == 0)
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{('/storage/images/'.$product->image)}}" class="card-img-top" style="max-height: 285px" alt="...">
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
            @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <p class="m-0">Showing 1 to {{count($products)}} of {{count($totalproducts)}} results</p>
            {{$products->links()}}
        </div>
    @endif
</div>
@endif

<script>
    if('{{Session::has('alert')}}'){
        alert('{{Session::get('alert')}}');
    }
    if('{{Session::has('error')}}'){
        alert('{{Session::get('error')}}');
    }
</script>
@endsection