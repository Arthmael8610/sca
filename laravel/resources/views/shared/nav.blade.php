
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">Citizen Warfare</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav navbar-right-expand-toggle ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="/team-registration">Register Your Team</a>
            </li>
            <li class=" nav-item">
                <a class="nav-link" href="/createtournament">Create a Tournament </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">Hello, <b>{{ $user->name }}</b></a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
            @endif
            <li class="nav-item">
            </li>
            <li class="nav-item">
                @if(!Auth::check())
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                @else
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                @endif
            </li>
        </ul>
    </div>
</nav>
<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>-->