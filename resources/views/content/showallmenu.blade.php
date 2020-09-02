@extends('layouts.app')
@section('content')
    <h1>Menu Items</h1>
    @if (count($items)>0)
        @foreach ($items as $item)
            
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4"> 
                        <img style="width:100%" src="/storage/images/{{$item->image_bath}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                        <h3>Item Name : <b>{{$item->name}}</b></h3>
                        <h3>Item Price :  <b>{{$item->Price}}</b> $ </h3>
                        @if($item->meal_type==1)
                            <h3>Item Type :  <b>Breakfast</b></h3>
                        @elseif($item->meal_type==2)
                            <h3>Item Type :  <b>Lunch</b></h3>
                        @elseif($item->meal_type==3)
                            <h3>Item Type :  <b>Dinner</b></h3>
                        @endif
                        @if($item->item_cat_id==1)
                            <h3>Item Category :  <b>Meal</b></h3>
                        @elseif($item->item_cat_id==2)
                            <h3>Item Category :  <b>Drinks</b></h3>
                        @elseif($item->item_cat_id==3)
                            <h3>Item Category :  <b>Dessert</b></h3>
                        @endif
                        <h3>
                            Avilability : @if($item->avilabilty == 1)<b>Avilable</b>
                            @else<b>Not available</b>
                            @endif
                        </h3>
                        </div>
                    </div>
                    <hr>
                    {!! Form::open(['action'=>['itemsController@destroy',$item->id],'method'=>'POST'] )!!}
                    {{Form::hidden('_method','DELETE')}}
                    <a href="/items/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                    {{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
                    {!! Form::close() !!}
                </div>
            
        @endforeach
        
            
    @else
    <b>No Items Found</b>
    @endif

@endsection