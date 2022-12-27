@extends('temp')

@section('title', 'Add Product')

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
                {{-- <form action="{{ route('insertproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Job Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Job Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp"></textarea>
                </div>
                <div class="mb-3">
                     <label for="category" class="form-label">Job Category</label>
                    <select class="form-select" id="category" name="category" aria-label="Default select example">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Job Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="teamCount" class="form-label">Job Team Count</label>
                    <input type="text" class="form-control" id="teamCount" name="teamCount">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="job_image" class="form-label">Job Image</label>
                    <input type="file" class ="form-control" id="job_image" name="job_image">
                </div>
                <div class="mb-2 form-check d-flex justify-content-start gap-2">
                    <input class="form-check-input" type="checkbox" name="terms" value="0" id="terms">
                    <label class="form-check-label" for="terms">
                      I agree to the terms & conditions
                    </label>
                </div>
                <div class="mb-2">
                    @if($errors->any())
                    <p class="text-danger">{{ $errors->first() }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Request</button>
            </form> --}}
            
<div class="container my-5">
                <form action="{{ route('insertproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="ms-5 d-flex flex-row">
                        <label for="image" class="form-label d-flex align-items-center" style="width: 25%">Image</label>
                    <input type="file" class="form-control w-75" id="image" name="image">
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="name" class="form-label d-flex align-items-center" style="width: 25%">Product Name</label>
                        <input type="text" class="form-control w-75" id="name" name="name">
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="description" class="form-label d-flex align-items-center" style="width: 25%">Description</label>
                        <textarea type="text" class="form-control w-75" id="description" name="description" aria-describedby="descriptionHelp"></textarea>
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="price" class="form-label d-flex align-items-center" style="width: 25%">Price</label>
                        <input type="text" class="form-control w-75" id="price" name="price">
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="stock" class="form-label d-flex align-items-center" style="width: 25%">Product Quantity</label>
                        <input type="text" class="form-control w-75" id="stock" name="stock">
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="category" class="form-label d-flex align-items-center" style="width: 25%">Category Name</label>
                        <select class="form-select w-75" id="category" name="category" aria-label="Default select example">
                            <?php $categories = DB::table('categories')->get(); ?>
                        <option selected>Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="linefade my-5"></div>
                <div class="my-3 ">
                    @if($errors->any())
                    <p class="text-danger p-2" style="border-radius:10px; background-color: #ffc7d0">{{ $errors->first() }}</p>
                    @endif
                </div>
                    <div>
                        <button type="submit" class="btn px-4 text-white" style="background-color: #5da5f0">Insert</button>
                        <a class="btn btn-danger px-4 text-white ms-3" href="">Cancel</a>
                    </div>
                </form>
</div> 
@endsection