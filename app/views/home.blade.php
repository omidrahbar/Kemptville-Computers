@extends('layouts.master')

@section('content')

<section id="main-slider" style="padding-top: 0px; margin-top:0px;background-image: url({{ URL::asset('assets/images/slider/special.jpeg'); }})">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            <li data-target="#main-slider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">     
            
            <div class="item active">
                <div class="container">
                    <div class="text-center">
                        <div class="carousel-content">
                        <h1 class="animation ">Merry Christmas & Happy New Year!</h1>
                        </div>
                        
                        <iframe width="853" height="480" src="//www.youtube-nocookie.com/embed/RrG4JnrN5GA?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

            </div><!--/.item-->              
            
            
            <div class="item" style="background-image: url({{ URL::asset('assets/images/slider/bg1.jpg'); }})">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-8">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">NOW FREE PICKUP & DELIVERY</h1>
                                <h2 class="animation animated-item-2">We're pleased to offer our clients free pickup and delivery within the Kemptville region.</h2>
                                <a class="btn-slide animation animated-item-3" href="<?=URL::to('about');?>">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->              
            
            
            <div class="item" style="background-image: url({{ URL::asset('assets/images/slider/bg2.jpg'); }})">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Web Development & Design</h1>
                                <h2 class="animation animated-item-2">Make a bigger statement with your website. We also offer custom app development to handle
                                specific data models.</h2>
                                <a class="btn-slide animation animated-item-3" href="<?=URL::to('services');?>">See Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url({{ URL::asset('assets/images/slider/bg3.jpg'); }})">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">We fix it or you don't pay!</h1>
                                <h2 class="animation animated-item-2">An idea we've always had with our work. If we can't get the job done, why should you pay?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

@stop