@extends('layouts.master')

@section('content')
<section id="feature">
    <div class="container">
        <div class="center wow fadeInDown">
             <h2>Book Appointment</h2>
             <p class="lead">We're glad you're here. Let's work together.</p>
         </div>

        <div class="col-sm-3 col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2>Our Process</h2>
            <div class="col-sm-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                <h3><strong>Step 1: Contact Us</strong></h3>
                <p>Encounter your IT problem and then come here and let us know. You can also <a href="<?=URL::to('contact');?>"/>call us</a>.</p>
            </div> 
            <div class="col-sm-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <h3><strong>Step 2: Confirm Time</strong></h3>
                <p>We'll call you to square up the details on when we can come over.</p>
            </div> 
            <div class="col-sm-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1800ms">
                <h3><strong>Step 3: Knock, Knock!</strong></h3>
                <p>We come by to your home or business and solve your issue.</p>
            </div>             
        </div>
        <div class="col-sm-9 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2>Book Appointment</h2>
            <p>When you describe your problem, please try to be as detailed as possible so we can respond accurately to your request. All form fields are required.</p>
            {{ Form::open(array('url' => '/support', 'id' => 'main-contact-form', 'class' => 'contact-form')) }}                
                  <div class="col-sm-6">
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
                      <div class="form-group">
                          <label>Ideal Service Date<sup>1</sup></label>
                            <div class='input-group date' id='servicedate'>
                                <input type='text' name="serviceDate" class="form-control" readonly=""/>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>                 
                      </div>
                      <div class="form-group">
                          <label>Physical Address</label>
                            <div class='form-group'>
                                <input type='text' name="physicalAddress" class="form-control"/>
                            </div>                 
                      </div>                         
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Problem Area</label>
                          <select class="form-control" name="problemArea">
                              <option selected="">Select Your Problem</option>
                              <option value="Equipment Failure">Equipment Failure</option>
                              <option value="Maintenance">Maintenance</option>
                              <option value="Networking/Connectivity">Networking/Connectivity</option>
                              <option value="Other">Other</option>
                              <option value="Software/Operating System">Software/Operating System </option>
                              <option value="Virus/Malware">Virus/Malware</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Problem Description</label>
                          <textarea name="problemDescription" id="message" required="required" class="form-control" rows="8"></textarea>
                      </div>                        
                  </div>
                  <div class="col-sm-12">
                      <div class="col-sm-8">
                        <div class="form-inline">
                            <label>
                                By submitting this request I'm agreeing to the terms and conditions of service.
                            </label>                            
                        </div>                          
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Make Appointment</button>
                        </div>                      
                      </div>
                  </div>
            {{ Form::close() }}             
        </div>
        
    </div><!--/.container-->
</section><!--/#feature-->
<section id="feature">
    <div class="container">
        <div class="wow fadeInLeft">
             <h3>Appointment Terms</h3>
             <p class="">1. We will do our best to honour the date you have 
             chosen, but please be advised this is not a guaranteed appointment.
             We will use your choice to pick the closest time available.</p>
             <p class="">2. Please note that accounts are subject to a $35.00 
             no-show fee if you do not cancel/reschedule an appointment you will
             not be available for. Please give us as much notice as possible if 
             you're unavailable for the appointment.</p>
         </div>
    </div>
</section>
@stop