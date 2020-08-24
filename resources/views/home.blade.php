@extends('layouts.app')

@section('content')
    <head>
        <style>
            body{
                    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.3)),url('images/home1.jpg');
                    font-family: 'Raleway', sans-serif;
                    font-weight: 900;
                    color:#fff;
                    margin: 0;
                }
        </style>
    </head>
    <body>
        <h1>Home Page</h1>
    </body>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
