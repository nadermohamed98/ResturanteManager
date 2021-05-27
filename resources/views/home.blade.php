@extends('layouts.app')
@section('title','Home')
@section('content')
    <body class="HomeBody">
        <h1>Welcome "{{Auth::user()->name}}" To <b>ParcDesPrinces</b> Restaurant website</h1>
        <h3>Here You can find and order whatever you want from Different types of the food </h3>
        <div class="Homeitem">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:170px;height:180px;border:1px solid;border-radius:250px" src="/images/breakfast.jpg">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Name : Eggs and Bacon</h4>
                    <h4>Description :</h4><p>A light meal for breakfast you can eat and get your energy up and ready to GO</p>
                    <h4>Price : <a href="/menu">Go to Menu</a></h4>
                </div>
            </div>
        </div>
        <div class="Homeitem">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:170px;height:180px;border:1px solid;border-radius:250px" src="images/steak.jfif">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Name : Steak</h4>
                    <h4>Description :</h4><p>A delicious meal for Lunch made of tasty meat you can eat and get your energy up and ready to GO</p>
                    <h4>Price : <a href="/menu">Go to Menu</a></h4>
                </div>
            </div>
        </div>
        <div class="Homeitem Homesecond">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:170px;height:180px;border:1px solid;border-radius:250px" src="images/pizza.jfif">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Name : Pizza</h4>
                    <h4>Description :</h4><p>Pizza is a very delicious food you can eat and get your energy up and ready to GO</p>
                    <h4>Price : <a href="/menu">Go to Menu</a></h4>
                </div>
            </div>
        </div>
        <div class="Homeitem Homesecond">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:170px;height:180px;border:1px solid;border-radius:250px" src="/images/drinks.jfif">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Name : Hot & Cold Drinks</h4>
                    <h4>Description :</h4><p>There is a lots of drinks that you order and get your energy up and ready to GO</p>
                    <h4>Price : <a href="/menu">Go to Menu</a></h4>
                </div>
            </div>
        </div>
    </body>
@endsection
