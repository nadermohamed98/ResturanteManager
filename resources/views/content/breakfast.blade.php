<!DOCTYPE html>
@extends('layouts.app')
@section('content')
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                body{
                    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)),url('../images/breakfast.jpg');
                    background-size:cover;
                    height:900px
                }   
                select{
                    padding:8px 5px;
                    width:450px;
                    color:#333333;
                    background-color:#eeeeee;
                    border:1px solid #dddddd;
                    cursor:pointer;
                    border-radius:5px;
                    text-align:center
                }
                select:focus,
                select:hover{
                    outline:none;
                    border:1px solid black;
                }
            </style>
        </head>
        <body>
            <h1 style="color:#fff;text-align:center" >Make Your Breakfast</h1><br>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.3)"> 
                <h3 style="color:rgba(255,255,255,1)">Main meal</h3>
                <select>            
                    <option name="eggs" value="eggs" >Eggs</option>
                    <option>No meals available now</option>
                </select>
            </div>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.4)"> 
            <h3 style="color:rgba(255,255,255,1)">Drinks</h3>
                <select>            
                    <option name="eggs" value="eggs" >None</option>
                    <option name="eggs" value="eggs" >Tee</option>
                </select>
            </div>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.4)"> 
                <h3 style="color:rgba(255,255,255,1)">Appetizers</h3>
                <select>            
                    <option name="eggs" value="eggs" >None</option>
                    <option name="eggs" value="eggs" >Cheese appetizer</option>
                </select>
            </div>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.4)"> 
                <h3 style="color:rgba(255,255,255,1)">Dessert</h3>
                <select>            
                    <option name="eggs" value="eggs" >None</option>
                    <option name="eggs" value="eggs" >Cheese cake</option>
                    <option name="eggs" value="eggs" >Cup cake</option>
                </select>
            </div>
            <div style="text-align:center">
            <a href="#" class="btn btn-primary" style="width:150px">Make Order</a>
            </div>
        </body>
    </html> 
@endsection