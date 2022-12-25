@extends('temp')

@section('title', 'Register')

@section('content')   

<div class="d-flex justify-content-center align-items-center" style="height: auto">
    <div class="container w-50" style="">
        <h1 class="text-center my-5">Create Your Account</h1>
        <div class="bg-light p-5 rounded my-5">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="d-flex">
                    <div class="mb-3 me-5">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 ms-5">
                      <label for="password" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm" name="confirm">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label" style="width: 25%">Address</label></label>
                    <textarea type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp"></textarea>
                    <p class="">Please write your actual address where you can receive mail</p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Phone</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  </div>
                
                  <div class="mb-2">
                    @if($errors->any())
                    <p class="text-danger">{{ $errors->first() }}</p>
                    @endif
                  </div>
                  <hr>
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <p class="m-0">Already have an account? <a class="text-decoration-none" href="{{ route('login') }}">Login here!</a></p>
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection