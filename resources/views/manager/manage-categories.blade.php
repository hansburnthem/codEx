@extends('layouts.app')

@section('header')
    @component("components.meta", ["title" => "Manage Categories"])
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

    <div class="mb-5 pt-5 px-0 md:px-10 md:max-w-5xl w-64 md:w-auto">
        <p class="text-center text-5xl mb-5 italic underline font-serif">Manage Categories</p>

        <div class="card-deck d-flex justify-content-center">
            @if(count($categories))
            <!--Looping data in Category-->
            @foreach($categories as $category)
                <div class="card-deck">
                    <!--Display Category Image-->
                    <div class="card" style="margin:30px; background-color:orange;">
                        <img class="card-img-top rounded-2xl" src="{{ asset($category->category_img) }}" style="width:330px; height:430px; margin:5px;">
                        <div class="card-body">
                            <!--Display Category Name-->
                            <h3 class="card-title" style="text-align:center; color: rgb(93, 37, 71);">{{ $category->category_name }}</h3>
                        </div>

                        <div class="card-footer d-flex justify-content-center margin">
                            <!--Delete Button-->
                            <form class="w-full text-black cursor-pointer hover:opacity-90 duration-300 btn btn-danger"
                                  action="{{ route('manager_categories')}}" method="post" onclick="this.submit()">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                Delete Category
                            </form>
                            <!--Update Button-->
                            <a href="{{route('manager_categories_update', ['id'=>$category->id])}}" class="w-full text-black cursor-pointer hover:opacity-90 duration-300 btn btn-primary">
                                Update Category
                            </a>
                        </div> 
                    </div>       
                </div>
            @endforeach
            @else
                <!--If no category print theres no categories-->
                <p>There's no categories</p>
            @endif
        </div>
@endsection
