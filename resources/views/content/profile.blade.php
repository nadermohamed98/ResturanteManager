@extends('layouts.app')

@section('content')
    <h1>Profile Page</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="panel-heading">Information</div>
                    <div class="panel-body">
                        <form class="form-horizontal " method="POST" action="register">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">Name :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-4 control-label ">{{Auth::user()->name}}</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">Email :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-4 control-label ">{{Auth::user()->email}}</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">Address :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-8 control-label ">{{Auth::user()->address}}</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">phone Number :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-4 control-label ">{{Auth::user()->phone_number}}</label>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="/users/{{Auth::user()->id}}/edit" class="btn btn-primary">Edite profile</a><br><br>
                                <a href="/edit" class="btn btn-danger">Edit the menu</a>
                                <a href="/view" class="btn btn-danger">View menu</a>
                                <a href="/view" class="btn btn-danger">View Users</a>
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection