<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <div style="background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('images/2.jpg');background-size:cover;">
    @extends("layouts.app")
        @section('content')

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>ParcDisPrinces</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <style>
                html, body {
                    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.3)),url('images/2.jpg');
                    margin: 0;
                }
                div{
                    font-family: 'Algerian';
                    font-weight: 400;
                    color:#fff;
                }

                .full-height {
                    height: 1000vh;
                }

                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

                .position-ref {
                    position: relative;
                }

                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }

                .content {
                    text-align: center;
                }

                .title {
                    font-size: 84px;
                }

                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 12px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
        </head>
        <body>
                <div class="content">
                    <div class="title m-b-md" style="padding-top:60px">
                        Parc Des Princes Resturant<hr>Welcome ..!
                    </div>
                </div>
        @endsection
            </div>
        </body>
    </div>
</html>
