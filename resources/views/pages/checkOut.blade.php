@extends('temp')

@section('title', 'Check Out')

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
            </tr>
        </thead>
        <tbody>
        <?php $total = 0 ?>
            @if (session('CART'.Auth::user()->id))
            @foreach (session('CART'.Auth::user()->id) as $id => $details)
            <?php $product = DB::table('products')->where('id', $details['id'])->first();?>
            <?php $total += $product->price * $details['quantity'] ?>
            <form action="/updateCart/{{$product->id}}">
                <tr class="">
                    <!-- <th scope="row">1</th> -->
                    <td class="">
                        <div class="d-flex align-items-center">
                            <img src="{{('/storage/images/'.$product->image)}}" class="img-fluid" style="max-width: 50px; border-radius: 500px" alt="">
                            <p class="m-0 ms-3">{{ $product->name }}</p>
                        </div>
                    </td>
                    <td>
                        {{ $product->price }}
                    </td>
                    <td>
                        <input type="text" class="form-control" style="width: 40%" id="number" name="number" value="{{ $details['quantity'] }}" readonly>
                    </td>
                    <td>
                        {{ $product->price * $details['quantity'] }}
                    </td>
                </tr>
            </form>
            @endforeach
            @endif
        </tbody>
    </table>
    <div class="my-2 d-flex justify-content-between align-items-center my-3">
        <p class="m-0">Ship to : {{Auth::user()->address}}</p>
        <p class="m-0">Total: IDR {{ $total }}</p>
    </div>
    <?php
        $passcode = "";
        for ($i = 1; $i <= 6; $i++){
            $numOrAlphabet = mt_rand(0,1);
            $digit = "";
            if($numOrAlphabet == 0){
                $digit = mt_rand(0,9);
            }
            else if($numOrAlphabet == 1){
                $digit = chr(mt_rand(65, 90));
            }
            $passcode = $passcode.$digit;
        }
    ?>
    <div class="mb-5 d-flex  justify-content-end">
        <div class="d-flex flex-column">
            <form action="/confirmcheckout/{{$passcode}}">
                <p class="m-0 mb-2 me-5">Please enter the following passcode to checkout: {{$passcode}}</p>
                <input type="text" class="form-control mb-2 w-100" id="pass" name="pass">
                @if($errors->any())
                    <p class="text-danger p-2" style="border-radius:10px; background-color: #ffc7d0">{{ $errors->first() }}</p>
                @endif
                <button type="submit" class="btn btn-primary w-100" href="#">Confirm</button>
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