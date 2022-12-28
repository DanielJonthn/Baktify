@extends('temp')

@section('title', 'Transaction')

@section('content') 
<div class="container my-5 ">
    <?php $transaction = DB::table('transaction_detail')->where('user_id', 'LIKE', $user->id)->exists(); ?>
    @if($transaction)
    <h1>Your Cart</h1>
    <div class="d-flex flex-column">
        @foreach ($user->transaction as $transaction)
        <table class="mt-3 table align-middle">
            <thead class="table-secondary">
                <tr>
                    <th scope="col" style="width: 50%">PRODUCT</th>
                    <th scope="col">PRICE</th>
                    <th scope="col" style="width: 20%">QUANTITY</th>
                    <th scope="col">SUBTOTAL</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0 ?>
                @foreach ($transaction->product as $product)
                <?php $total += $product->price * $product->pivot->quantity ?>
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
                        <input type="text" class="form-control" style="width: 40%" id="number" name="number" value="{{ $product->pivot->quantity }}" readonly>
                    </td>
                    <td>
                        {{ $product->price * $product->pivot->quantity }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-between align-items-center my-3">
            <?php $dates = \Carbon\Carbon::parse($transaction->date); $dates->setTimezone('Asia/Jakarta');?>
            <p class="m-0">Transaction Date: {{$dates->format('Y-m-d H:i:s');}}</p>
            <p class="m-0">Total: IDR {{number_format( $total , 0 , '.' , ',' );}}.00</p>
        </div>
        @endforeach
    </div>
    @elseif(!$transaction)
    <div style="height: 100vh">
            <h1>You don't have any transaction!</h1>
        </div>
    @endif
</div>
@endsection