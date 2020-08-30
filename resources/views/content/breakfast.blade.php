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
                    height:1000px;
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
                input{
                    text-align:center;
                    width:80px;
                    height:40px;
                    border-radius:10px
                }
                label{
                    color:#fff;
                }
            </style>
        </head>
        <body>
            <h1 style="color:#fff;text-align:center;font-family:Algerian" >Make Your Breakfast</h1><br>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.3)"> 
                <h3 style="color:rgba(255,255,255,1)">Main meal</h3>
                <select>            
                    <option name="eggs" value="eggs" >Eggs</option>
                    <option>No meals available now</option>
                </select>
                <input type="text" placeholder="0.00"><label>$</label>
            </div>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.3)"> 
            <h3 style="color:rgba(255,255,255,1)">Drinks</h3>
                <select>            
                    <option name="eggs" value="eggs" >None</option>
                    <option name="eggs" value="eggs" >Tee</option>
                </select>
                <input type="text" placeholder="0.00"><label>$</label>
            </div>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.3)"> 
                <h3 style="color:rgba(255,255,255,1)">Appetizers</h3>
                <select>            
                    <option name="eggs" value="eggs" >None</option>
                    <option name="eggs" value="eggs" >Cheese appetizer</option>
                </select>
                <input type="text" placeholder="0.00"><label>$</label>
            </div>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.3)"> 
                <h3 style="color:rgba(255,255,255,1)">Dessert</h3>
                <select>            
                    <option name="eggs" value="eggs" >None</option>
                    <option name="eggs" value="eggs" >Cheese cake</option>
                    <option name="eggs" value="eggs" >Cup cake</option>
                </select>
                <input type="text" placeholder="0.00"><label>$</label>
            </div>
            <div style="text-align:center">
            <label>Total price : </label><input type="text" placeholder="0.00"><label>$</label><br><br>
            <a href="#" class="btn btn-primary" style="width:150px">Make Order</a>
            </div>
        </body>
    </html> 
@endsection