@extends('temp')

@section('title', 'About Us')

@section('content')    
{{-- Upper Part --}}
<div class="container px-4 py-5">
    <div class="mb-4">
        <h4 class="text-center" style="color: grey">"Baktify started form our love for music and album, we create Baktify to spread the love in our music community, 
            we started off from street near Rawa Belong street and now we have the most diverse collection of albums and 
            musics. We won't stop until music spreads all over the world"</h4>
    </div>
    <div class="text-center"><h4>Conny Blue, CEO Baktify</h4></div>
</div>

{{-- Bottom Part --}}
<div style="background-color: #f4f4f4">
    {{-- Get in touch --}}
    <div class="container py-4">
        <div class="row gy-4 gx-5">
            <div class="ms-5 col-lg-4">
                <h3>Get in touch</h3>
            </div>
            <div class="col-lg-4">
                <h3 class="mb-2">Daniel</h3>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex flex-column">
                        <span>daniel@baktify.com</span>
                        <span>+62 861 6197 9126</span>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h3 class="mb-2">Jonathan</h3>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex flex-column">
                        <span>jonathan@baktify.com</span>
                        <span>+62 812 1231 8316</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row gy-4 gx-5">
            <div class="ms-5 col-lg-4 col-md-6"></div>
            <div class="col-lg-4">
                <h3 class="mb-2">Ryan</h3>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex flex-column">
                        <span>ryan@baktify.com</span>
                        <span>+62 801 6548 3480</span>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h3 class="mb-2">To</h3>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex flex-column">
                        <span>to@baktify.com</span>
                        <span>+62 813 1546 5468</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Location --}}
    <div class="container py-4">
        <div class="row gy-4 gx-5">
            <div class="ms-5 col-lg-4">
                <h3>Location</h3>
            </div>
            <div class="col-lg-4">
                <h3 class="mb-2">Jakarta</h3>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex flex-column">
                        <span>Jl. Rawa Belong No. 420</span>
                        <span>11420</span>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h3 class="mb-2">Osaka</h3>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex flex-column">
                        <span>1 Chome-9-1 Sennichimae, Chuo Ward</span>
                        <span>542-0074</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row gy-4 gx-5">
            <div class="ms-5 col-lg-4 col-md-6"></div>
            <div class="col-lg-4">
                <h3 class="mb-2">California</h3>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex flex-column">
                        <span>Pier 39 D, 3, San Francisco</span>
                        <span>94133</span>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h3 class="mb-2">Seoul</h3>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex flex-column">
                        <span>J24, Changhae-ro 14beon-gil, Gangneung</span>
                        <span>25556</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection