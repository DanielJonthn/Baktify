@extends('temp')

@section('title', 'Edit Product')

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
<div class="container my-5">
    <div class="my-5 ms-5">
        <h2>{{$product->name}}</h2>
    </div>
    <div class=" my-5 w-100 d-flex justify-content-center align-items-center">
        <img src="/assets/{{$product->image}}" class="card-img-top img-fluid w-25" alt="...">
    </div>

    {{-- Form --}}
    <form action="{{route('submitproduct', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="ms-5 d-flex flex-row">
            <label for="image" class="form-label" style="width: 25%">Image</label>
            <input type="file" class="form-control w-75" id="image" name="image">
        </div>
        <div class="linefade my-5"></div>
        <div class="ms-5 d-flex flex-row">
            <label for="description" class="form-label" style="width: 25%">Description</label>
            <textarea type="text" class="form-control w-75" id="description" name="description" aria-describedby="descriptionHelp">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="linefade my-5"></div>
        <div class="ms-5 d-flex flex-row">
            <label for="price" class="form-label" style="width: 25%">Price</label>
            <input type="text" class="form-control w-75" id="price" name="price" value="{{ old('price', $product->price) }}">
        </div>
        <div class="linefade my-5"></div>
        <div class="ms-5 d-flex flex-row">
            <label for="stock" class="form-label" style="width: 25%">Product Quantity</label>
            <input type="text" class="form-control w-75" id="stock" name="stock" value="{{ old('stock', $product->stock) }}">
        </div>
    <div class="linefade my-5"></div>
        <div class="ms-5">
            <button type="submit" style="width: 100px" class="btn btn-primary me-3">Update</button>
            <a class="btn btn-danger" style="width: 100px" href="{{route('product')}}">Cancel</a>
        </div>
    </form>
</div> 
@endsection