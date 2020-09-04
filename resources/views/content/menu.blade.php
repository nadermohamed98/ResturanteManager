<!DOCTYPE html>
@extends('layouts.app')
@section('content')
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
        <body style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)),url('images/m.jpg');background-size:cover;">
            <h1 style="font-family:algerian;color:#fff;text-align:center" >Food Categories</h1><br>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.3)"> 
                <h3 style="color:rgba(255,255,255,1)">Breakfast</h3>
                <a href="/breakfast" class="btn btn-danger" style="width:150px">GO</a>
            </div>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.4)"> 
                <h3 style="color:rgba(255,255,255,1)">Lunch</h3>
                <a href="/content/lunch" class="btn btn-danger" style="width:150px">GO</a>
            </div>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.4)"> 
                <h3 style="color:rgba(255,255,255,1)">Dinner</h3>
                <a href="/content/dinner" class="btn btn-danger" style="width:150px">GO</a>
            </div>
        </body>
    </html> 
@endsection