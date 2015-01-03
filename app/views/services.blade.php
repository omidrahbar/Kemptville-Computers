@extends('layouts.master')

@section('content')
<section id="feature">
    <div class="container">
        <div class="center wow fadeInDown">
             <h2>Our Services</h2>
             <p class="lead">We provide on-site support and service homes and businesses.</p>
         </div>

        <div class="row">
            <div class="features">
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cogs"></i>
                        <h2>Maintenance</h2>
                        <h3>We can help keep the costs down on your IT expenses by providing
                        custom maintenance schedules.</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-ambulance"></i>
                        <h2>Virus Removal</h2>
                        <h3>Viruses, malware, pop-ups, we all hate them. We take care of 
                        it all with our extensive eradication procedures.</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud-download"></i>
                        <h2>Data Recovery</h2>
                        <h3>In a data-rich world, losing anything can be devastating. Let us recover
                        your information. If we can't recover it - you don't pay.</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-desktop"></i>
                        <h2>Custom Builds</h2>
                        <h3>Need an office solution? We can build powerful-budget office machines. If you're a 
                        gamer, we can make sure you have the best hardware to keep that 60FPS.</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-wrench"></i>
                        <h2>Desktop Repairs</h2>
                        <h3>From power supplies, memory to motherboards, we can fix or replace most components
                        on your desktop.</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-wrench"></i>
                        <h2>Laptop Repairs</h2>
                        <h3>Stop overspending on laptop DC jack repairs and screen replacements. We can fix 
                        most laptop issues for less.</h3>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-sitemap"></i>
                        <h2>Web Sites</h2>
                        <h3>We offer comprehensive and competitive web site design and application development. <a href=<?=URL::to('contact');?>>Contact us</a> to get more information!</h3>
                    </div>
                </div><!--/.col-md-4-->                    
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-comments"></i>
                        <h2>Consultation</h2>
                        <h3>Get all the information you need to avoid costly IT investments.
                        We offer consultation for businesses so you intelligently expand your 
                        infrastructure.</h3>
                    </div>
                </div><!--/.col-md-4-->                     
            </div><!--/.services-->
        </div><!--/.row-->    
    </div><!--/.container-->
</section><!--/#feature-->

<section id="services-cta">
    <div class="center">                
        <h2>Ready to Get Started?</h2>
        <p class="lead">Click below to tell us about your home or business IT issues to get the ball rolling.</p>
        <a href="<?=URL::to('support');?>"class="btn btn-primary btn-lg"/>Submit Support Request</a>
    </div>
</section>

@stop