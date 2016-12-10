<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">FlashyCards</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        @if(Auth::check())
                            <li @yield('home-active')>
                                <a href="/home">Home</a>
                            </li>
                        @else
                            <li @yield('login-active')>
                                <a href="/login">Sign In</a>
                            </li>
                            <li @yield('register-active')>
                                <a href="/register">Register</a>
                            </li>
                            <li>
                                <a href="http://p1.mooreberg.me">More Projects</a>
                            </li>
                        @endif
                    </ul>
                    @if(Auth::check())
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown"
                                   role="button" aria-haspopup="true"
                                   aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>