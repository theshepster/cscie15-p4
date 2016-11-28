@extends('layouts.master')

@section('custom-head')
    <link href="{{ URL::asset('css/carousel.css') }}" rel="stylesheet">
@endsection

@section('home-active')
    class="active"
@endsection

@section('content')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="https://static.pexels.com/photos/53459/lightning-storm-weather-sky-53459.jpeg" alt="Card">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>FlashyCards.</h1>
                        <p>Study in a flash with FlashyCards.</p>
                        {{--TODO: Fix href link below.--}}
                        <p><a class="btn btn-lg btn-primary" href="/" role="button">Create a Deck</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="https://static.pexels.com/photos/21827/night.jpg" alt="Review">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Review</h1>
                        <p>Got a deck? Now review what you know to sharpen your knowledge.</p>
                        {{--TODO: Fix href link below.--}}
                        <p><a class="btn btn-lg btn-primary" href="/" role="button">Review a Deck</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="https://static.pexels.com/photos/211157/pexels-photo-211157.jpeg" alt="More">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>More Projects.</h1>
                        <p>Interested in something a bit different? Check out some other projects created this semester.</p>
                        <p><a class="btn btn-lg btn-primary" href="http://p1.mooreberg.me" role="button">More Projects</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
    </div>
    <!-- /.carousel -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="http://images.techhive.com/images/article/2013/06/shutterstock_42883318_friendly_robot-100040734-medium.jpg" alt="User Generator" width="140" height="140">
                <h2>User Generator</h2>
                <p>Tired of making up fake users for testing your app? Too many John Does and Jane Smiths?</p>
                <p>Click the button. Make up some users. Easy.</p>
                <p><a class="btn btn-default" href="/users" role="button">Generate Users »</a><br></p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple Ipsum" width="140" height="140">
                <h2>Apple Ipsum Generator</h2>
                <p>Lorem ipsum dolor sit amet? How about Apple ipsum Macbook iPhone 6? Apple products are good for everything - now they're even good for boilerplate text.</p>
                <p><a class="btn btn-default" href="/lorem" role="button">Generate Text »</a></p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="http://www.clipartkid.com/images/158/picture-of-plus-sign-clipart-best-D40BLA-clipart.png" alt="More" width="140" height="140">
                <h2>More Projects</h2>
                <p>This is project 3 of 4 in Dynamic Web Applications, CSCIE-15, Fall 2016. Check out the rest of this semester's projects.</p>
                <p><a class="btn btn-default" href="http://p1.mooreberg.me" role="button">More »</a><br></p>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Fake users. <span class="text-muted">Real results.</span></h2>
                <p class="lead">Don't waste time making up fake users. You focus on making your app. We'll focus on high-quality fake names. With all the time you save, maybe you should call your mom. She's worried about you.</p>
            </div>
            <div class="col-md-5">
                <a href="/users">
                    <img class="featurette-image img-responsive center-block" src="http://images.complex.com/complex/lrkda6djvfxsdg3w8lrg.jpg" alt="Users">
                </a>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">Lorem ipsum. <span class="text-muted">Meet Apple.</span></h2>
                <p class="lead">If you can name the month and year each of the last six MacBook Pro updates were released, then you should find a new hobby. If you think populating boilerplate text with words like "Safari" and "iPhone" would be mildly amusing, then you've come to the right spot.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <a href="/lorem">
                    <img class="featurette-image img-responsive center-block" src="https://static.pexels.com/photos/159240/pexels-photo-159240.jpeg" alt="Apple Ipsum">
                </a>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Looking for more?<br><span class="text-muted">There's more.</span></h2>
                <p class="lead">This is project 3 of 4. That means two things: 1) there are two projects that preceded this project, and 2) there will be one more project after this one. Mysterious? No. It's very straightforward.</p>
            </div>
            <div class="col-md-5">
                <a href="http://p1.mooreberg.me">
                    <img class="featurette-image img-responsive center-block" src="https://static.pexels.com/photos/4636/person-woman-eyes-face.jpg" alt="More">
                </a>
            </div>
        </div>
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
    </div>
@endsection