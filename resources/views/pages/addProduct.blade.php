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
                {{-- <form action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data">
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
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="ms-5 d-flex flex-row">
                        <label for="name" class="form-label" style="width: 25%">Image</label>
                        <input type="file" class="form-control w-75" id="name" name="name">
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="name" class="form-label" style="width: 25%">Product Name</label>
                        <input type="text" class="form-control w-75" id="name" name="name">
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="name" class="form-label" style="width: 25%">Description</label>
                        <textarea type="text" class="form-control w-75" id="description" name="description" aria-describedby="descriptionHelp"></textarea>
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="name" class="form-label" style="width: 25%">Price</label>
                        <input type="text" class="form-control w-75" id="name" name="name">
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="name" class="form-label" style="width: 25%">Product Quantity</label>
                        <input type="text" class="form-control w-75" id="name" name="name">
                    </div>
                    <div class="linefade my-5"></div>
                    <div class="ms-5 d-flex flex-row">
                        <label for="name" class="form-label" style="width: 25%">Category Name</label>
                        <select class="form-select w-75" id="category" name="category" aria-label="Default select example">
                        <option selected>Job Category</option>
                          <option value="">Country</option>
                    </select>
                </div>
                <div class="linefade my-5"></div>
                    <div>
                        <button type="submit" class="btn btn-primary">Insert</button>
                        <a class="btn btn-danger" href="">Cancel</a>
                    </div>
                </form>
            </div> 
@endsection