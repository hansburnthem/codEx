@extends('layouts.app')

@section('header')
    @component("components.meta", ["title" => "Cart"])
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
    <div class="flex flex-col items-center">
        <h1 names="category" style="text-align: center;" class="text-center text-5xl mb-5 italic underline font-serif">Your Cart</h1>

        <!--Looping Data in Cart-->
        @foreach($carts as $cart)

        <table class="table">
            <tbody>
                <tr>
                    <!--Get book Images-->
                    <td><img class="card-img-top" src="{{ asset($cart->book->book_img) }}" style="width:250px; height:350px; margin:5px;"></td>
                    <!--Get book Name-->
                    <td><h2 class="mx-5" style="text-align:center; color: rgb(93, 37, 71);">{{ $cart->book->book_name }}</h2></td>
                    <!--Get book Price-->
                    <td><h3>Rp {{ $cart->book->book_price }}</h3></td>
                    <td>
                        <!--Form for update data in Cart-->
                        <form action="{{ route('view_cart') }}" method="post">
                            @csrf
                            @method('PUT')
                            <!--Input Quantity-->
                            <input name="qty" id="qty" type="number" value="{{ $cart->qty }}" class="ml-5">
                            <input name="book_id" id="book_id" type="hidden" value="{{ $cart->book_id }}" class="ml-5">
                            <!--Update button-->
                            <button type="submit" class=" hover:opacity-80 duration-300 text-white px-3 py-2  font-medium bg-yellow-400 ml-2">Update</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        @endforeach
        <!--If the cart is not null, user can use checkout button-->
        @if(count($carts) != 0)
            <a href="{{ route('checkout_cart') }}" class="text-center hover:opacity-80 duration-300 text-white px-3 py-2  font-medium bg-yellow-300 ml-2 mb-5"> <h3>Checkout</h3></a>
        @endif
    </div>
@endsection
