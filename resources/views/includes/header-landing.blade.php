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
                        <li @yield('login-active')>
                            <a href="/login">Sign In</a>
                        </li>
                        <li @yield('register-active')>
                            <a href="/register">Register</a>
                        </li>
                        <li>
                            <a href="http://p1.mooreberg.me">More Projects</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>