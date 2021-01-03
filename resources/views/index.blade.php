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
        <!--Welcome text-->
        <p class="text-center text-5xl mb-2 italic underline font-serif">Welcome to Bukupedia</p>
        <p class="text-center text-2xl mb-1 italic font-serif">The Best Shop in Binus University</p> <br><br>

        <div class="card-deck d-flex justify-content-center ">
            @if(count($categories))
            <!--Looping Category-->
            @foreach($categories as $category)
            <a href="{{URL('viewProduct/' . $category->id)}}">
                <div class="card-deck">

                    <div class="card" style="margin:30px; background-color:rgb(251, 161, 76);">
                        <div class="card-body w-full">
                            <!--Display Category Name-->
                            <h3 class="card-title no-underline hover:underline text-x5 italic duration-300 hover:text-black font-serif w-full" style="text-align:center; color: rgb(255, 255, 255);">{{ $category->category_name }}</h3>
                        </div>
                    </div>
                    
                </div>
            </a>
            @endforeach
        </div>
        
        @else
            <p>There's no categories</p>
        @endif

        <div class="card-deck d-flex justify-content-center">
            @foreach($books as $f)
            <a href="{{ route('detail_product', ['id'=>$f->id]) }}">
                <div class="card-deck">

                    <div class="card" style="margin:30px; background-color:rgb(251, 161, 76);">
                        <!--Get book Image-->
                        <img class="card-img-top" src="{{ asset( $f->book_img) }}" style="width:300px; height:430px; margin:5px;">
                        <div class="card-body">
                            <!--Get book Name-->
                            <h6 class="card-title" style="text-align:center; color: rgb(93, 37, 71);">{{ $f->book_name }}</h6>
                            <!--Get book Price-->
                            <h5 class="card-title" style="text-align:center; color: rgb(93, 37, 71);">Rp {{ $f->book_price }}</h5>
                        </div>
                    </div>

                </div>
            </a>
            @endforeach
        </div>
@endsection
