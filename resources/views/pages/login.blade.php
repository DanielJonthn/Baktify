@extends('temp')

@section('title', 'Login')

@section('content')   
<div class="d-flex justify-content-center align-items-center" style="height: auto">
    <div class="container w-50" style="">
        <h1 class="text-center my-5">Sign In To Your Account</h1>
        <div class="bg-light p-5 rounded my-5">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-2">
                    @if($errors->any())
                    <p class="text-danger">{{ $errors->first() }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <input type="checkbox">
                    <label for="">Remember Email</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="py-2 w-100 btn btn-primary">Sign In</button>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <div style="width: 100%; border-bottom: 1px solid black; margin: auto"></div>
                    <p class="m-0 mx-3">Or</p>
                    <div style="width: 100%; border-bottom: 1px solid black; margin: auto"></div>
                </div>

                <div class="mt-3">
                    <a type="submit" class="py-2 w-100 btn btn-outline-secondary" href="{{ route('register') }}">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection