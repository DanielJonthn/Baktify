@extends('temp')

@section('title', 'Login')

@section('content')   
<div class="d-flex justify-content-center align-items-center" style="height: auto">
    <div class="container w-50" style="">
        <h1 class="text-center my-5">Sign In To Your Account</h1>
        <div class="bg-light p-5 rounded my-5">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" @if(Cookie::has('cemail')) value="{{Cookie::get('cemail')}}" @endif class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" @if(Cookie::has('cpassword')) value="{{Cookie::get('cpassword')}}" @endif class="form-control" id="password" name="password">
                </div>
                <div class="my-3">
                    @if($errors->any())
                   <div class="d-flex flex-column text-danger p-2" style="border-radius:10px; background-color: #ffc7d0">
                       @foreach($errors->all() as $error)
                       <p class="m-0">{{ $error }}</p>
                       @endforeach
                   </div>
                   @endif 
               </div>
                <div class="mb-3">
                    <input type="checkbox" @if(Cookie::has('cemail')) checked @endif name="remember" id="remember"/>
                    <label for="remember">Remember Me</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="py-2 w-100 btn text-white" style="background-color: #5e5df0">Sign In</button>
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