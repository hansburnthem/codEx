@extends('layouts.app')

@section('header')
    @component("components.meta", ["title" => "Update Categories"])
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

    <!--Title-->
    <h1 names="category" style="text-align: center;" class="text-center text-5xl mb-5 italic underline font-serif">{{ $category->category_name }}</h1>

    <!--Form for select book and search products-->
        <div class="row justify-content-start">
            <div>
                <!--Select book using drop down menu button-->
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Book
                </button>  
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="d-flex flex-column">
                        @foreach($books as $f)
                            <a href="{{ route('detail_product', ['id'=>$f->id]) }}" style="font-size: 15px; color: rgb(93, 37, 71); margin:10px;">{{ $f->book_name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div>
                <!--Search book Form-->
                <form action="{{URL('viewProduct/' . $category->id .'/cari')}}" method="GET">
                    <input class="form-control" type="text" name="cari" placeholder="Search" value="{{ old('cari') }}"> <br>
                    <input type="submit" value="Search" class="btn btn-outline-primary">
                </form>
            </div>

        </div>


    @if(Auth::user())

    <!--Product View for Manager-->
        @if(Auth::user()->role->role_name === 'Manager')

            <!--Data of books (Image, Name, Price) and button (Delete, Update)-->
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

                            <div class="card-footer d-flex justify-content-center">
                                <!--Delete Button-->
                                <a href="/viewProduct/delete/{{$f->id}} " class="w-full text-black cursor-pointer hover:opacity-90 duration-300 btn btn-danger">Delete book</a> <br>
                                <!--Update Button-->
                                <a href="/viewProduct/edit/{{$f->id}} " class="w-full text-black cursor-pointer hover:opacity-90 duration-300 btn btn-primary">
                                    Update book
                                </a>
                            </div>
                        </div>

                        
                    </div>
                </a>
                @endforeach
            </div>
            {{$books->links()}}


        <!--Product View for Customer-->
        @elseif (Auth::user()->role->role_name === 'Customer')

             <!--Data of books (Image, Name, Price)-->
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
            {{$books->links()}}
        @endif

        <!--Product View for Guest-->
        @else
            <!--Data of books (Image, Name, Price) and button (Delete, Update)-->
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
            {{$books->links()}}
    @endif

@endsection
