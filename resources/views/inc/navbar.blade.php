<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="/welcome">ParcDesPrinces</a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/home">Home</a></li>
                <li><a href="/about">About us</a></li>
                <li><a href="/contact">Contact us</a></li>
                @if (Route::has('login'))                
                    @if (Auth::check())
                        <li><a href="{{ url('/profile page') }}">profile page</a></li>
            </ul>
                <ul class="nav navbar-nav navbar-right">
                    @endif
                @endif   
                </ul>
            <ul class="nav navbar-nav navbar-right">    
                @if (Route::has('login'))  
                    @if (Auth::check())
                        <li><a href="{{ url('/logout') }}">logout</a></li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
            </ul>
                @endif   
        </div>
    </div>
  </nav>