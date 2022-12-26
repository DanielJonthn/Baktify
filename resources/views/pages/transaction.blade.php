@extends('temp')

@section('title', 'Transaction')

@section('content') 
<div class="container my-5 ">
    <h1>Your Cart</h1>
    <table class="mt-3 table align-middle">
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
    <div class="d-flex justify-content-between align-items-center my-3">
        <p class="m-0">Transaction Date: 26 - 1 - 2022</p>
        <p class="m-0">Total: IDR 12496125</p>
    </div>
</div>
@endsection