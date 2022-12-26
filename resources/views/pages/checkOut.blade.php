@extends('temp')

@section('title', 'Check Out')

@section('content') 

<div class="container">
    <table class="table align-middle">
        <thead class="table-secondary">
            <tr>
                <th scope="col">PRODUCT</th>
                <th scope="col">PRICE</th>
                <th scope="col" style="width: 20%">QUANTITY</th>
                <th scope="col">SUBTOTAL</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @for($i = 1; $i <= 5; $i++)
            <form>
                <tr class="">
                    <!-- <th scope="row">1</th> -->
                    <td class="">
                        <div class="d-flex align-items-center">
                            <img src="/assets/UntilIFoundYou.png" class="img-fluid" style="max-width: 50px; border-radius: 500px" alt="">
                            <p class="m-0 ms-3">Until I Found You</p>
                        </div>
                    </td>
                    <td>
                        IDR 70000
                    </td>
                    <td>
                        <input type="text" class="form-control" style="width: 40%" id="number" name="number">
                    </td>
                    <td>
                        IDR 8500000
                    </td>
                    <td>
                        <a class="btn btn-primary" href="">Update Cart</a>
                    </td>
                </tr>
            </form>
                @endfor
        </tbody>
    </table>
    <div class="my-2 d-flex justify-content-between align-items-center my-3">
        <p class="m-0">Ship to: Member Address</p>
        <p class="m-0">IDR 12496125</p>
    </div>
    <div class="mb-5 d-flex  justify-content-end">
        <div class="d-flex flex-column">
            <p class="m-0 mb-2 me-5">Please enter the following passcode to checkout: asd</p>
            <input type="text" class="form-control mb-2 w-100" id="name" name="name">
            <a class="btn btn-primary w-100" href="#">Confirm</a>
        </div>
    </div>
</div>
@endsection