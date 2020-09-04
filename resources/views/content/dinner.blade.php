@extends('layouts.app')
@section('content')
        <head>
            <style>
                /* div .img{
                    float:left;
                    margin:10px;
                } */
                /* div .info{
                    text-align:center;
                    padding:20px
                } */
                div .item{
                    background-color:rgba(0,0,0,0.3);
                    color:#fff;
                    display:inline-block;
                    width:48%;
                    height:180px;
                    border:solid;
                    border-radius:15px;
                    padding:10px;
                    margin:10px
                }
                /* h3{
                    font-family:Arial;
                } */
            </style>
        </head>
        <body style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)),url('../images/dinner.jpg');background-size:cover">
        <div>
            <div style="float:right">
                    <button class="btn btn-success" formaction="">Make Order</button>
                </div>
            <h1 style="color:#fff;text-align:center;font-family:Algerian" >Make Your Dinner</h1><br>
        </div>
            @if(count($items)>0)
                @foreach($items as $item)
                    @if($item->meal_type == 3 && $item->avilabilty == 1)
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img style="width:150px;height:150px;border:1px solid;border-radius:250px" src="/storage/images/{{$item->image_bath}}">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h3>Name : {{$item->name}}</h3>
                                    <h3>Price : {{$item->Price}} $</h3>
                                    <label>Amount : </label>
                                    <input style="color:black;width:50px" type="text">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <p>No Breakfast items found</p>
            @endif
        </body>
@endsection