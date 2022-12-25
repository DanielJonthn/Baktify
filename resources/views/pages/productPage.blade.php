@extends('temp')

@section('title', 'Product')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between">
        <div>
            <h3 class="fw-bold">OUR PRODUCTS</h3>
        </div> 
        <div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    
    <div>
        
    </div>
</div>
@endsection