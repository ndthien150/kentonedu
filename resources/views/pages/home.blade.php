@extends('pages.base')

@section('title')
    {{$title}}
@endsection

@section('content')
    <section class="container-fuild">
        <div class="container-fuild">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('images/duhocKenton-slide1.jpg')}}" alt="Los Angeles" class="img-responsive">
                </div>

                <div class="item">
                    <img src="{{ asset('images/duhocKenton-slider2.jpg')}}" alt="Chicago" class="img-responsive">
                </div>
            </div>

            <!-- Left and right controls -->
            <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>
@endsection