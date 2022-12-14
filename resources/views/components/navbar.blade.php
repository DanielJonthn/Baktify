{{-- Guest Navbar --}}
@if(!Auth::check())
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow" style="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="d-flex align-items-center justify-content-between w-100">
            <a class="ms-2 navbar-brand d-flex flex-column justify-content-center align-items-center ms-3" href="{{route('home')}}">
                <img src="/assets/Logo.png" style="width: 40px" alt="">
                <h6 class="">Baktify</h6>
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product')}}">Products</a>
                </li>
            </ul>
            <div class="me-3">
                <a class="btn my-2 my-sm-0" href="{{route('login')}}">Sign in</a>
                <a class="btn text-white my-2 my-sm-0 py-2 px-3" style="border-radius: 50px; background-color: #5e5df0" href="{{route('register')}}">Sign up</a>
            </div>
        </div>
    </div>
</nav>

{{-- Member Navbar --}}
@elseif(Auth::user()->role == 'Member')
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="d-flex align-items-center justify-content-between w-100">
            <div>
                <a class="ms-2 navbar-brand d-flex flex-column justify-content-center align-items-center ms-3" href="{{route('home')}}">
                    <img src="/assets/Logo.png" style="width: 40px" alt="">
                    <h6 class="">Baktify</h6>
                </a>
            </div>
            <div>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('transaction')}}">My Transactions</a>
                    </li>
                </ul>
            </div>
            <div class="me-3 d-flex align-items-center">
                <a class="btn d-flex align-items-center me-2" style="height: auto" href="{{route('cart')}}">Cart</a>
                <div class="d-flex flex-column" style="color: grey">
                    <p class="m-0" style="color: grey">Member</p>
                    <a class="text-decoration-none" style="color: grey" href="{{route('profile')}}">View Profile</a>
                </div>
            </div>
        </div>
    </div>
</nav>

{{-- Admin Navbar --}}
@elseif(Auth::user()->role == 'Admin')
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="d-flex align-items-center justify-content-between w-100">
            <div>
                <a class="ms-2 navbar-brand d-flex flex-column justify-content-center align-items-center ms-3" href="{{route('home')}}">
                    <img src="/assets/Logo.png" style="width: 40px" alt="">
                    <h6 class="">Baktify</h6>
                </a>
            </div>
            <div>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('addcategory')}}">Add Category</a>
                    </li>
                </ul>
            </div>
            <div class="me-5 d-flex flex-column" style="color: grey">
                <p class="m-0" style="color: grey">Admin</p>
                <a class="nav-link" href="{{route('profile')}}">View Profile</a>
            </div>
        </div>
    </div>
</nav>
@endif