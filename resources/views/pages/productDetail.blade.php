@extends('temp')

@section('title', 'Detail')

@section('content')
<div class="container w-25">
    <div class="my-5 d-flex flex-column align-items-center">
        <div class="w-100">
            <img src="/assets/{{$productDetail->image}}" class="card-img-top img-fluid" alt="...">
        </div>
        <div class="w-100">
            <div class="mt-4 d-flex flex-column justify-content-start align-items-start w-100">
                <h2 class="">{{$productDetail->name}}</h2>
                <p class="card-text mt-3" style="color: gray;">{{$productDetail->description}}</p>
                <p class="card-text" style="color: gray;">Stock: {{$productDetail->stock}}</p>
                <p class="card-text" style="color: gray;">Category: {{$productDetail->category->name}}</p>
            </div>
        </div>
    </div>
</div>
@endsection