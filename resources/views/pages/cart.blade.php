@extends('temp')

@section('title', 'Cart')

@section('content') 
<div class="container my-5 ">
    <?php $total = 0 ?>
    @if (session('CART'.Auth::user()->id))
    <h1>Your Cart</h1>
    <table class="mt-3 table align-middle">
        <thead class="table-secondary">
            <tr>
                <th scope="col" style="width: 50%">PRODUCT</th>
                <th scope="col">PRICE</th>
                <th scope="col" style="width: 20%">QUANTITY</th>
                <th scope="col">SUBTOTAL</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach (session('CART'.Auth::user()->id) as $id => $details)
            <?php $product = DB::table('products')->where('id', $details['id'])->first();?>
            <?php $total += $product->price * $details['quantity'] ?>
            <form action="/updateCart/{{$product->id}}">
                <tr class="">
                    <td class="">
                        <div class="d-flex align-items-center">
                            <img src="{{('/storage/images/'.$product->image)}}" class="img-fluid" style="max-width: 50px; border-radius: 500px" alt="">
                            <p class="m-0 ms-3">{{ $product->name }}</p>
                        </div>
                    </td>
                    <td>
                        IDR {{ $product->price }}
                    </td>
                    <td>
                        <input type="number" min='0' class="form-control" style="width: 40%" id="number" name="number" value="{{ $details['quantity'] }}">
                    </td>
                    <td>
                        IDR {{ $product->price * $details['quantity'] }}
                    </td>
                    <td>
                        <button type="submit" class="btn text-white p-2" style="border-radius:10px; background-color: #5e5df0">Update Cart</button>
                    </td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center my-3">
        <a class="btn text-white p-2" style="border-radius:10px; background-color: #5e5df0" href="{{route('checkout')}}">Check Out</a>
        <p class="m-0">Total: IDR {{ $total }}</p>
    </div>
    @else
        <div style="height: 100vh">
            <h1>Your cart is empty</h1>
        </div>
    @endif
</div>
@endsection