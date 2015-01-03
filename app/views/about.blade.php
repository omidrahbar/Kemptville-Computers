@extends('layouts.master')

@section('content')
<section id="about-us">
    <div class="container">
        <div class="center wow fadeInLeftBig">
            <h2>About Us</h2>
            <p class="lead">"To establish a new set of IT standards by providing honest, experienced answers to our consumers. To ensure all work is done to the best of its ability, and without fail, ensure our customers are satisfied with the work."</p>
        </div>
        <div class="center wow fadeInUpBig">
            <img src='{{ URL::asset('assets/images/about/about_logo.png'); }}'/>
        </div>

        <div class="row">
            <div class="col-sm-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                <h3><strong>Mobile & Professional</strong></h3>
                <p>We understand how difficult it can be to lug your computer to a store. This is one of the main reasons we switched to a mobile platform. Simply book your appointment online, we show up and we'll fix your problem.</p>
            </div> 
            <div class="col-sm-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="600ms">
                <h3><strong>No Jargon</strong></h3>
                <p>We won't speak another language. We know sometimes it can also be unavoidable, which is why we break down the problem for you.
                    This way you can spend less time wondering, and more time getting back to business.</p>
            </div> 
        </div>

        <div class="row">
            <div class="col-sm-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                <h3><strong>Why are we different?</strong></h3>
                <p>We are computer enthusiasts. This is not just some day job for us. This is our life's work. We spend every waking moment soaking up the industry and constantly refining our craft.</p>
                <p>By striving for excellence, it challenges us and allows us to grow to be more effective at solving real world IT issues.</p>
            </div> 
            <div class="col-sm-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="600ms">
                <h3><strong>We're Serious About Fixing</strong></h3>
                <p>Nothing is more painful than losing your ability to connect, communicate and enjoy your computer. Whether it's an Apple product an open-source distribution or plain 'ol Windows.</p>
                <p>We are always reviewing the market and reviewing current threats, issues and bugs in popular software products.</p>
            </div> 
        </div>            
    </div>
</section>
@stop