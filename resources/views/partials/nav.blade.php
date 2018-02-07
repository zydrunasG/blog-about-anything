<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-link active" href="{{ url('/') }}">Home</a>
                @if(Auth::check())
                    <a class="nav-link " href="{{ url('posts/create') }}">Create post</a>
                @endif
                <a class="nav-link" href="#">About</a>
                @if(Auth::check())
                    <div class="dropdown nav-link ml-auto">


                        <a class="dropdown-toggle" id="userMenuButton" data-toggle="dropdown" >{{ Auth::user()->name }}</a>

                        <div class="dropdown-menu" aria-labelledby="userMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Action2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                        </div>
                    </div>
                @else
                    <a class="nav-link ml-auto" href="{{ url('login') }}">Login</a>


                @endif
            </nav>
        </div>

    </div>

    <div class="blog-header">
        <div class="container">

            @if ($flash = session('message'))
            <div id="flash-message" class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
            @endif

            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
    </div>
</header>