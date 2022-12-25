@extends('temp')

@section('title', 'Detail')

@section('content')
<div class="container w-25">
    <div class="my-5 d-flex flex-column align-items-center">
        <div class="w-100">
            <img src="/assets/UntilIFoundYou.png" class="card-img-top img-fluid" alt="...">
        </div>
        <div class="w-100">
            <div class="mt-4 d-flex flex-column justify-content-start align-items-start w-100">
                <h2 class="">Album Title</h2>
                <p class="card-text mt-3" style="color: gray;">Descrtiption</p>
                <p class="card-text" style="color: gray;">Stock: 250</p>
                <p class="card-text" style="color: gray;">Category</p>
            </div>
        </div>
    </div>
</div>
@endsection