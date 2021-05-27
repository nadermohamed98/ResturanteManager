@extends('layouts.app')
@section('title','Edit Profile')
@section('content')
    <h1>Edit information</h1>
    {!! Form::open(['action'=>['UsersController@update',$user->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}} 
            {{Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('email','Email')}} 
            {{Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('password','Password')}} 
            {{Form::password('password', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('address','Address')}} 
            {{Form::text('address',$user->address,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone_number','Phone_number')}} 
            {{Form::text('phone_number',$user->phone_number,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection