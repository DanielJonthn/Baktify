@extends('temp')

@section('title', 'Edit Profile')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: auto">
    <div class="container w-50" style="">
        <h1 class="text-center my-5">Update your profile</h1>
        <div class="bg-light p-5 rounded my-5">
            <form action="{{ route('submitedit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{Auth::user()->name}}">
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{Auth::user()->email}}" readonly>
                </div>

                <div class="d-flex">
                    <div class="mb-3 me-5">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" value="dummy">
                    </div>
                    <div class="mb-3 ms-5">
                      <label for="confirm" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm" name="confirm">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label" style="width: 25%">Address</label></label>
                    <textarea type="text" class="form-control" id="address" name="address" aria-describedby="descriptionHelp">{{ Auth::user()->address }}</textarea>
                    <p class="" style="color: gray">Please write your actual address where you can receive mail</p>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" value="{{ Auth::user()->phone }}">
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
                <hr>
                <div class="w-100 d-flex justify-content-end align-items-center">
                    <a class="btn text-white px-3 mx-3" style="background-color: #5e5df0" href="{{ route('profile') }}">Cancel</a>
                    <button type="submit" class="btn text-white px-3" style="background-color: #5e5df0">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection