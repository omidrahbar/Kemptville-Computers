@extends('layouts.master')

@section('content')
<section id="feature">
    <div class="container">
        <div class="center wow fadeInDown">        
            <h2>Have a Question?</h2>
            <p class="lead">We'd love to hear from you. 
                Fill out the form below and we'll get back to you as soon as possible.</p>
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            {{ Form::open(array('url' => 'contact', 'id' => 'main-contact-form', 'class' => 'contact-form')) }}                
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" class="form-control">
                    </div>                      
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                    </div>                        
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                    </div>
                </div>
            {{ Form::close() }}    
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->

<section id="contact-info">
    <div class="center">                
        <h2>Phone & Location</h2>
        <p class="lead">If dropping your equipment off to our location, please 
        call in advance to ensure we can accept it securely.</p>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap" style="margin-bottom: -20px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5640.321612301976!2d-75.64830416664884!3d45.021661018492736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccdea9e59ffd757%3A0x194cec94ea1e06ce!2s308+Rideau+St%2C+North+Grenville%2C+ON+K0G+1J0!5e0!3m2!1sen!2sca!4v1417382675046" width="100%" height="300" frameborder="0" style="border:0;"></iframe>
                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-12" style="font-size:16pt;">
                            <address>
                                <h2>Equipment Drop Off</h2>
                                <p>308 Rideau St. <br>
                                Kemptville, ON K0G1J0</p>
                                <p>Phone: (613) 218 - 5322 <br>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->
@stop