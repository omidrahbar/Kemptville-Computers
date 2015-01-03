<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kemptville Computers provides computer repair, web development, network troubleshooting, consultation
          machine builds and on-site services since 2009 to Kemptville, Merrickville, Spencerville and surrounding regions.">
    <meta name="author" content="Kemptville Computers 2015">
    <meta name="keywords" content="computer repair, computer service, kemptville, ottawa, spencerville, merrickville, networking, business services,
          virus removal, desktop repair, laptop repair, wiring">
    
    <title>{{ $title }} | Kemptville Computers - Computer Repairs & Service</title>
    {{ HTML::style('assets/css/bootstrap.min.css'); }}
    {{ HTML::style('assets/css/font-awesome.min.css'); }}
    {{ HTML::style('assets/css/animate.min.css'); }}
    {{ HTML::style('assets/css/prettyPhoto.css'); }}
    {{ HTML::style('assets/css/main.css'); }}
    {{ HTML::style('assets/css/responsive.css'); }}
    {{ HTML::style('assets/css/bootstrap-datetimepicker.min.css'); }}
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=URL::to('/');?>"><img src="{{ URL::asset('assets/images/logo.png'); }}" alt="logo"></a>
                </div>
				
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li @if(Request::is('/')) {{ 'class="active"' }} @endif ><a href="<?=URL::to('/');?>">Home</a></li>
                        <li @if(Request::is('about')) {{ 'class="active"' }} @endif ><a href="<?=URL::to('about');?>">About Us</a></li>
                        <li @if(Request::is('services')) {{ 'class="active"' }} @endif ><a href="<?=URL::to('services');?>">Services</a></li>
                        <li @if(Request::is('contact')) {{ 'class="active"' }} @endif ><a href="<?=URL::to('contact');?>">Contact Us</a></li>
                        <li @if(Request::is('support')) {{ 'class="active"' }} @endif ><a href="<?=URL::to('support');?>">Book Us</a></li>                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->

    <!-- Begin Blade Insertions -->
    @yield('content')
    <!-- End Blade Insertions -->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    &copy; <?=date('Y');?> <a target="_blank" href="http://kemptvillecomputers.com/" title="Kemptville Computers">Kemptville Computers</a>. All Rights Reserved.
                </div>
                <div class="col-sm-3">
                    <!--<a href="#">Policies & Terms</a>-->
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    {{ HTML::script('assets/js/jquery.js'); }}
    {{ HTML::script('assets/js/bootstrap.min.js'); }}
    {{ HTML::script('assets/js/jquery.prettyPhoto.js'); }}
    {{ HTML::script('assets/js/jquery.isotope.min.js'); }}
    {{ HTML::script('assets/js/main.js'); }}
    {{ HTML::script('assets/js/wow.min.js'); }}
    {{ HTML::script('assets/js/moment.min.js'); }}
    {{ HTML::script('assets/js/bootstrap-datetimepicker.min.js'); }}
    {{ HTML::script('assets/js/jquery.snow.min.js'); }}
    <script>
    $(function () {
        $('#servicedate').datetimepicker();
    });    
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-57210654-1', 'auto');
      ga('send', 'pageview');

    </script>    
<script>
$(document).ready( function(){
   $.fn.snow({ minSize: 5, maxSize: 50, newOn: 1000, flakeColor: '#ffffff' });
});
</script>    
</body>
</html>