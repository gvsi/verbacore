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
                    <h3></i>Access the core.</h3>
                    <span>We're working hard to release a public beta soon.<p>If you have not requested your invitation yet, you can do so through <a href="/#join-rev">this link</a>.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p></span> 
            </div>
            <div class="col-lg-5 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">
                    <input class="input-text" type="text" name="" value="username." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="password" name="" value="password." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-btn" type="submit" value="login">
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