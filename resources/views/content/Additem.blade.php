@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Item</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{action('itemsController@store')}}" enctype="multipart/form-data">
                    
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="image_bath" class="col-md-4 control-label">Image :</label>

                            <div class="col-md-6">
                                {{Form::file('image_bath')}}
                            </div>
                        </div><hr>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Item name :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div><hr>
                        <div class="form-group">
                            <label for="Price" class="col-md-4 control-label">Item Price :</label>

                            <div class="col-md-6">
                                <input id="Price" type="text" class="form-control" name="Price" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div><hr>

                        <div class="form-group" style="text-align:center">
                            <label class="col-md-4 control-label">Item Category :</label>
                            <div class="col-md-2">
                                <label>Meal</label>
                                <input type="radio" name="ItemCat" value="1"><br>
                            </div>
                            <div class="col-md-2">
                                <label>Drinks</label>
                                <input type="radio" name="ItemCat" value="2" checked><br>
                            </div>
                            <div class="col-md-2">
                                <label>Dessert</label>
                                <input type="radio" name="ItemCat" value="3" checked><br>
                            </div>
                        </div><hr>
                        <div class="form-group" style="text-align:center">
                            <label class="col-md-4 control-label">Meal Type :</label>
                            <div class="col-md-2">
                                <label>Breakfast</label>
                                <input type="radio" name="Mealtype" value="1"><br>
                            </div>
                            <div class="col-md-2">
                                <label>Lunch</label>
                                <input type="radio" name="Mealtype" value="2" checked><br>
                            </div>
                            <div class="col-md-2">
                                <label>Dinner</label>
                                <input type="radio" name="Mealtype" value="3" checked><br>
                            </div>
                        </div><hr>
                        <div class="form-group" style="text-align:center">
                            <label class="col-md-4 control-label">Avilability :</label>
                            <div class="col-md-2">
                                <label>Yes </label>
                                <input type="radio" name="avilabilty" value="1"><br>
                            </div>
                            <div class="col-md-2">
                                <label>No </label>
                                <input type="radio" name="avilabilty" value="0" checked><br>
                            </div>
                        </div><hr>
                        
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add New Item
                                </button>
                                <a href="/showallmenu" class="btn btn-primary">
                                    Show all menu
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
