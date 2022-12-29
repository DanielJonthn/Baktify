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
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            </select>
        </div>
                
        <div class="linefade my-5"></div>
                
        <div class="my-3">
            @if($errors->any())
            <div class="d-flex flex-column text-danger p-2" style="border-radius:10px; background-color: #ffc7d0">
                @foreach($errors->all() as $error) 
                    <p class="m-0">{{ $error }}</p>
                @endforeach
            </div>
            @endif
        </div>
        <div>
            <button type="submit" class="btn px-4 text-white" style="background-color: #5da5f0">Insert</button>
            <a class="btn btn-danger px-4 text-white ms-3" href="{{route('product')}}">Cancel</a>      
        </div>
    </form>
</div> 

<script>
    if('{{Session::has('alert')}}'){
        alert('{{Session::get('alert')}}');
    }
</script>
@endsection