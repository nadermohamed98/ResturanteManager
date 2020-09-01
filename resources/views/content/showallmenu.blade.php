@extends('layouts.app')
@section('content')

    <h1>Menu Items</h1>
    @if (count($items)>1)
        @foreach ($items as $item)
            
                <div class="well">
                    <h2>Item Name : <b>{{$item->name}}</b></h2>
                    <h2>Item Price :  <b>{{$item->Price}}</b></h2>
                    <h2>Item Price :  <b>{{$user->meal_type}}</b></h2>
                    @if($item->item_cat_id==1)
                        <h2>Item Category :  <b>Meal</b></h2>
                    @elseif($item->item_cat_id==2)
                        <h2>Item Category :  <b>Drinks</b></h2>
                    @elseif($item->item_cat_id==3)
                        <h2>Item Category :  <b>Dessert</b></h2>
                    @endif
                    <h2>
                        Avilability : @if($item->avilabilty == 1)<b>Avilable</b>
                        @else<b>Not available</b>
                        @endif
                    </h2>
                    <hr>
                    {!! Form::open(['action'=>['UsersController@destroy',$user->id],'method'=>'POST'] )!!}
                    {{Form::hidden('_method','DELETE')}}
                    <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
                    {{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
                    {!! Form::close() !!}
                </div>
            
        @endforeach
        
            
    @else
    <b>No Items Found</b>
    @endif

@endsection