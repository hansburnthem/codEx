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

    <br>
    <div class="container">
        <div class="card">
            <div class="row no-gutters" style="background-color: orange">

                <div class="col-md-5">
                    <!--Display book Image-->
                    <img src="{{asset($data->book_img)}}" class="card-img" style="width:330px; height:430px; margin:5px;">
                </div>

                <div class="col-md-6">
                    <div class="card-body">
                        <br>
                        <!--Edit product form-->
                        <form method="POST" action="/viewProduct/update/{{$data->id}}" enctype="multipart/form-data">
                            @csrf
                            <table align="center">
                                <tr>
                                    <td><label for="category">Category</label></td>
                                    <td>
                                        <!--Select Category Option-->
                                        <select name="book_category_id" id="book_category_id" class="form-control input-sm">
                                            @foreach($category as $categorys)
                                                <option value="{{$categorys->id}}" 
                                                    @if($categorys->id == $data->book_category_id)
                                                        selected
                                                    @endif
                                                >{{$categorys->category_name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        <br>
                                    </td>
                                    <br>
                                </tr>

                                <tr>
                                    <!--Input new book name-->
                                    <td><label for="book_name">book Name</label></td>
                                    <td><input name="book_name" type="text" class="form-control" id="book_name" value={{$data->book_name}}><br></td>
                                </tr>

                                <tr>
                                    <!--Input new book price-->
                                    <td><label for="book_price">book Price (Rupiah)</label></td>
                                    <td>
                                        <!--Price Option-->
                                        <select name="book_price" class="custom-select" id="book_price" required>
                                            <option selected disabled value=""></option>
                                            <option value="50000" @if($data->book_price == 50000) selected @endif>50000</option>
                                            <option value="100000" @if($data->book_price == 100000) selected @endif>100000</option>
                                            <option value="250000" @if($data->book_price == 250000) selected @endif>250000</option>
                                            <option value="500000" @if($data->book_price == 500000) selected @endif>500000</option>
                                            <option value="1000000" @if($data->book_price == 1000000) selected @endif>1000000</option>

                                            <option value="{{$data->book_price}}" 
                                                @if($data->book_price == $data->book_price) selected @endif>{{$data->book_price}}
                                            </option>
                                            
                                        </select>
                                        <br><br>
                                    </td> 
                                </tr>

                                <tr>
                                    <!--Input new book description-->
                                    <td><label>Description</label></td>
                                    <td><textarea name="book_desc" class="form-control">{{$data->book_desc}}</textarea><br></td>
                                </tr>

                                <tr>
                                    <!--Choose new book image-->
                                    <td><label>book Image</label></td>
                                    <td><input type="file" name="book_img"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                        <!--Submit data to update book-->
                                        <br><button type="submit" class="btn btn-primary" >Update</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection