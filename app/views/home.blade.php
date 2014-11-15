@extends('layout.main')         {{--extents layout/main.blade.php--}}

@section('content')             {{--start @section content--}}




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>VerbaCore</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

{{ HTML::style('css/bootstrap.css') }}
{{ HTML::style('css/style.css') }}
{{ HTML::style('css/font-awesome.css') }}
{{ HTML::style('css/responsive.css') }}
{{ HTML::style('css/animate.css') }}


<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

{{ HTML::script('js/jquery.1.8.3.min.js') }}
{{ HTML::script('js/bootstrap.js') }}
{{ HTML::script('js/jquery-scrolltofixed.js') }}
{{ HTML::script('js/jquery.easing.1.3.js') }}
{{ HTML::script('js/jquery.isotope.js') }}
{{ HTML::script('js/wow.js') }}
{{ HTML::script('js/classie.js') }}


<!--[if lt IE 9]>
    {{ HTML::script('js/respond-1.1.0.min.js') }}
    {{ HTML::script('js/html5shiv.js') }}
    {{ HTML::script('js/html5element.js') }}
<![endif]-->


</head>
<body>
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#">{{ HTML::image('img/logo.png') }}</a>	
        </figure>	
        <h1 class="animated fadeInDown delay-07s">We are VerbaCore</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>Reinventing social. From the core.</li>
        </ul>
            <a class="link animated fadeInUp delay-1s" href="#join-rev" onclick="document.getElementById('access_button').click()">Request invitation</a>
            <br/> <a class="       animated fadeInUp delay-1s" href="{{{ URL::route('account-sign-in') }}}">Login</a>
    </div>
</div>
</header><!--header-end-->


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li class="small-logo"><a href="#header">{{ HTML::image('img/small-logo.png') }}</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#join-rev" id="access_button">Access</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>The product</h2>
    	<h6>We offer exceptional social network with complimentary hugs.</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-paw"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Leaving a mark</h3>
                        <p>With this revolutionary idea we are making impact and shaping tomorrow's everyday life.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-gear"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Web Application</h3>
                        <p>Beautiful and inovative built with attention to detail.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-apple"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Mobile design</h3>
                        <p>The current version is fully responsive and can be used on any mobile device on the market.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-medkit"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>24/7 Support</h3>
                        <p>Contact us anytime and we will try to help. Feedback is also appreciated.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	{{ HTML::image('img/macbook-pro.png') }}
            </figure>
        
        </div>
	</div>
</section><!--main-section-end-->



<section class="main-section alabaster"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	{{ HTML::image('img/iphone.png') }}
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>The work</h2>
            	<P class="padding-b">We did our best to provide you with minimalistic and usable social network.</P>
            	<div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>The magic of development</h3>
                        <p>The application was built with Laravel framework, HTML5, CSS3, JS and more. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>Neatly packaged</h3>
                        <p>The application is very minimalistic and everything is organized and easy to find. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>Optimized</h3>
                        <p>It is fast, reliable and ready for the big market.</p>
                    </div>    
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->



<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">Made in MLH Launch Hack</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	{{ HTML::image('img/mlh_logo.png') }}
                <h3>London</h3>
                <span>Oct 4-5th, 2014</span>
            </a></li>
        </ul>
    </div>
</section><!--main-section client-part-end-->
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Giovanni Alcantara</h3>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Martin Georgiev</h3>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking" id="join-rev"><!--business-talking-start-->
	<div class="container">
        <h2>Join the revolution.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="access">
	        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                    <h3></i>We're working hard to release a public beta soon</h3>
                    <span>Request your access through this form.<p> Every step through our journy is going to be hard and we will appriciate any type of help. Users are the most important thing for us thus feedback is our most valued asset. The sooner you get on the list the sooner you will have the chance to be part of us. </p></span> 
            </div>
            <div class="col-lg-5 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">
                    <input class="input-text" type="text" name="" value="name." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="" value="email." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <div style="text-align: center;">
                        <input class="input-btn" type="submit" value="request invitation">
                    </div>
                </div>  
            </div>
        </div>

</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#">{{ HTML::image('img/footer-logo.png') }}</a></div>
        <span class="copyright">Copyright © 2014</span>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

</body>

</html>

@stop                           {{--end @section content--}}
