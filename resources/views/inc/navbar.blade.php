@php use App\User; @endphp

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="/welcome">ParcDesPrinces</a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/home">Home</a></li>
                @if (Route::has('login'))                
                    @if (Auth::check())
                        @if(Auth::user()->role_id==2)
                            <li><a href="{{ url('/menu') }}">Menu</a></li>
                        @endif
                    @endif
                    
                    <li><a href="/about">About us</a></li>
                    <li><a href="/contact">Contact us</a></li>
                @endif
            
            </ul>
            <ul class="nav navbar-nav navbar-right">    
                @if (Route::has('login'))  
                    @if (Auth::check())
                        @if(Auth::user()->role_id==1)
                            <li><a href="/profile">Profile page</a></li>
                        @endif
                        <li><a href="{{ url('/logout') }}">logout</a></li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
                @endif   
            </ul>
        </div>
    </div>
  </nav>