@extends('temp')

@section('title', 'Add Category')

@section('content')   
<div class="container w-50">
    <div class="d-flex mt-5">
        @foreach ($categories as $categories)
            <p class="p-2 me-2 text-white px-3" style="border-radius:10px; background-color: #5e5df0">{{$categories->name}}</p>
        @endforeach
    </div>
    <h1>Add New Category</h1>
    <div class="my-5">
        <form action="{{ route('insertcategory') }}" method="POST">
            @csrf
            <div class="d-flex flex-row">
                <label for="name" class="form-label d-flex align-items-center" style="width: 25%">Category Name</label>
                <input type="text" class="form-control w-75" id="name" name="name">
            </div>
            <div></div>
                <button type="submit" class="btn mt-4 text-white" style="background-color: #5da5f0">Submit</button>
            </div>
            <div class="my-3 ">
                @if($errors->any())
                    <p class="text-danger p-2" style="border-radius:10px; background-color: #ffc7d0">{{ $errors->first() }}</p>
                @endif
            </div>
    </div>
</div>
@endsection