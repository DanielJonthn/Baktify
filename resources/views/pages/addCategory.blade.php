@extends('temp')

@section('title', 'Add Category')

@section('content')   

<div class="container w-50" style="">
    <div class="d-flex mt-5">
        <p class="bg-primary p-2 me-2" style="border-radius:10px;">Genre</p>
        <p class="bg-primary p-2 me-2" style="border-radius:10px;">Genre</p>
        <p class="bg-primary p-2 me-2" style="border-radius:10px;">Genre</p>
    </div>
    <h1>Add New Category</h1>
    <div class="my-5">
        <form action="{{ route('home') }}" method="POST">
            @csrf
            <div class="d-flex flex-row">
                <label for="name" class="form-label" style="width: 25%">Category Name</label>
                <input type="text" class="form-control w-75" id="name" name="name">
            </div>
            <div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </div>
    </div>
</div>
@endsection