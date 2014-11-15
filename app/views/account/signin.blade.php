@extends('layout.main')

@section('content')

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

<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="/">Home</a></li>
            <li class="small-logo"><a href="#header">{{ HTML::image('img/small-logo.png') }}</a></li>
            <li><a href="/#join-rev" id="access_button">Access</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                    <h3></i>Sign up.</h3>
                    <span><p>We're working hard to release a public beta soon. Every step through our journy is going to be hard and we will appriciate any type of help. Users are the most important thing for us thus feedback is our most valued asset. The sooner you get on the list the sooner you will have the chance to be part of us. </p></span> 
            </div>
            <div class="col-lg-5 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">
                <form action="" method="POST">
                   <input class="input-text" type="text" name="email" autocomplete="off" {{ (Input::old('email')) ? 'value = "'.e(Input::old('email')).'"' : '' }} value="username" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
					@if($errors->has('email'))
						{{ $errors->first('email') }}
					@endif
				   <input class="input-text" type="password" name="password" value="password" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
					@if($errors->has('password'))
						{{ $errors->first('password') }}
					@endif
                    <div style="text-align:center">
                    <input class="input-btn" type="submit" value="login">
                    </div>
                    {{ Form::token() }}
                </form>
                </div>  
            </div>
        </div>
    </div>
</section>

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


@stop
