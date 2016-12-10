@extends('layouts.master')

@section('custom-head')
    <link href="{{ URL::asset('css/carousel.css') }}" rel="stylesheet">
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
                        <p>
                            <a class="btn btn-lg btn-primary" href="/login" role="button">Sign In</a>
                            <a class="btn btn-lg btn-primary" href="/register" role="button">Register</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="https://static.pexels.com/photos/21827/night.jpg" alt="Review">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Review</h1>
                        <p>Got a deck? Now review what you know to sharpen your knowledge.</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="/login" role="button">Sign In</a>
                            <a class="btn btn-lg btn-primary" href="/register" role="button">Register</a>
                        </p>
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
                <img class="img-circle" src="http://cdn.biggestonline.co.uk/thurtelldesigns/images/flashy-designs.png" alt="Card" width="140" height="140">
                <h2>So Flashy</h2>
                <p>Want to learn something? Be flashy about it.</p>
                <p><a class="btn btn-default" href="/home" role="button">Be Flashy »</a><br></p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="http://www.clipartkid.com/images/780/deck-of-cards-sports-and-recreation-great-clipart-for-fYbhsd-clipart.jpg" alt="Deck" width="140" height="140">
                <h2>Decked Out</h2>
                <p>Deck yourself before you wreck yourself.</p>
                <p><a class="btn btn-default" href="/home" role="button">Deck It Out »</a></p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="http://www.clipartkid.com/images/158/picture-of-plus-sign-clipart-best-D40BLA-clipart.png" alt="More" width="140" height="140">
                <h2>More Projects</h2>
                <p>This is project 4 of 4 in Dynamic Web Applications, CSCIE-15, Fall 2016. Check out the rest of this semester's projects.</p>
                <p><a class="btn btn-default" href="http://p1.mooreberg.me" role="button">More »</a><br></p>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
@endsection