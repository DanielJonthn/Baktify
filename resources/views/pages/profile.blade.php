@extends('temp')

@section('title', 'Profile')

@section('content') 

<div class="d-flex justify-content-center align-items-center" style="height: auto">
    <div class="container w-50" style="">
        <h1 class="text-center my-5">Your Profile</h1>
        <div class="bg-light p-5 rounded my-5">
            <form action="" method="">
                <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{Auth::user()->name}}" readonly>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{Auth::user()->email}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="dummyPassword" readonly>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label" style="width: 25%">Address</label></label>
                    <textarea type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" readonly>{{Auth::user()->address}}</textarea>
                    <p class="" style="color: gray">Please write your actual address where you can receive mail</p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Phone</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{Auth::user()->phone}}" readonly>
                  </div>

                  <div class="mb-2">
                    @if($errors->any())
                    <p class="text-danger">{{ $errors->first() }}</p>
                    @endif
                  </div>
                  <hr>
                <div class="w-100 d-flex justify-content-end align-items-center">
                    <a class="btn text-white mx-3 px-3" style="background-color: #5e5df0" href="{{ route('editprofile') }}">Update</a>
                    <a class="btn btn-danger px-3" href="{{ route('logout') }}">Sign Out</a>
                    <!-- <button type="submit" class="btn btn-primary">Sign Out</button> -->
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    if('{{Session::has('alert')}}'){
        alert('{{Session::get('alert')}}');
    }
  </script>

@endsection