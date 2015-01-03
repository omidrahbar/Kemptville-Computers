@extends('layouts.master')

@section('content')
<section>
    <div class="container">
        <div class="center wow fadeInDown">
             <h2>Thanks for booking your appointment!</h2>
             <p class="lead">We look forward to meeting with you to resolve your
                 issue. In the meantime sit back, get a cup of coffee and relax.</p>
             <hr>
             <div class="alert alert-info col-xs-6 col-xs-offset-3">
                 <h4>Your Awesome Unique ID: {{ $supportId }}</h4>
                 <p>We've sent you an email with a copy of your support ticket, along with an ID.
            Use this ID to reference this ticket if need be. We will contact you as soon as we can.</p>
             </div>
         </div>
    </div><!--/.container-->
</section><!--/#feature-->
@stop