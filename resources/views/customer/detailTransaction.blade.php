@extends('layouts.app')

@section('header')
    @component("components.meta", ["title" => "Home"])
    @endcomponent
@endsection

@section('content')
    @if (session('status'))
        @component('components.session', ['statusType' => Str::substr(session('status'), 1, 3), 'status' => Str::substr(session('status'), 5)])
        @endcomponent
        @php
            Session::forget('status');
        @endphp
    @endif
    <div class="flex flex-col items-center" >
        <!--Get Transaction date-->
        <h1>Your Transaction at {{ $transaction->created_at }}</h1>
        <table class="table table-bordered">
            <tr>
                <th>book Image</th>
                <th>book Name</th>
                <th>Subtotal</th>
                <th>Quantity</th>
            </tr>
            @foreach($transaction->transactionDetails as $transactionDetail)

                <tr>
                    <td>
                        <!--Get book Images-->
                        <img src="{{ asset($transactionDetail->book->book_img) }}" style="width:250px; height:350px; margin:5px;">
                    </td>
                    <td>
                        <!--Get book Name-->
                        {{ $transactionDetail->book->book_name }}
                    </td>
                    <td>
                        <!--Get book Price using quantity * price-->
                        Rp {{ $transactionDetail->book->book_price * $transactionDetail->qty }}
                    </td>
                    <td>
                        <!--Get book Quantity-->
                        {{ $transactionDetail->qty }}
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="p-2 bg-yellow-300 text-white rounded-2xl my-3">
            <!--Print total price-->
           <h2>Total Price: Rp {{ $totalPrice }}</h2> 
        </div>
    </div> <br><br>
@endsection
