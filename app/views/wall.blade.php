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
{{ HTML::style('css/theme.css') }}
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
  <meta charset="utf-8">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <?php $query = DB::table('queries')->lists('query'); 
  ?>
  <script>

  $(function() {
    var availableTags = <?php echo json_encode($query );?>;
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>

</head>
<body>
<div style="overflow:hidden;">

<nav class="main-nav-outer" id="test"><!--main-nav-start-->
    <div class="container">
        <ul class="main-nav">
            <li><a href="/">Me</a></li>
            <li class="small-logo"><a href="#header">{{ HTML::image('img/small-logo.png') }}</a></li>
            <li><a href="/account/sign-out" id="access_button">Out</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->

<section class="post-section" id="service"><!--main-section-start-->
    <div class="container">
        <h2><br />wall</h2>
    </div>
</section><!--main-section-end-->

    {{ Form::open(array('url' => '/post')) }}
        <div style="text-align:center" >
        <div class="ui-widget">
          <input id="tags" autocomplete="off" placeholder="talk." name="query_text" onfocus="if(this.value==this.defaultValue){this.value='';}" onblur="if(this.value=='')this.value=this.defaultValue;" >
        </div>
        <input style="display: none;" class="input-btn" type="submit" value="login">
                            {{ Form::token() }}
                     </div>
    {{ Form::close() }}

<section class="post-section" id="service"><!--main-section-start-->
    <div class="container wrapper">
        <div class="row pad45">
            <div class="col-sm-6 col-md-3">
                <div class="tile">
                    <div class="intro-icon-disc cont-large"><img src="img/team-leader-pic1.jpg" style="width:90px; border-radius:45px;"></i></div>
                    <h6>
                        <p><span>Giovanni Alcantara<br></span><h9>3 mins ago</h9></p>
                    </h6>
                    <p>
                        I'm feeling good.
                    </p>
                    </div> 
                
            </div> 
                
            <div class="col-sm-6 col-md-3">
                <div class="tile">
                    <div class="intro-icon-disc cont-large"><img src="img/team-leader-pic2.jpg" style="width:90px; border-radius:45px;"></i></div>
                    <h6>
                        <p><span>Martin Georgiev<br></span><h9>14 mins ago</h9></p>
                    </h6>
                    <p>
                        I love hackathons.
                    </p>
                    </div> 
                
            </div> 
                    
            <div class="col-sm-6 col-md-3">
                <div class="tile">
                    <div class="intro-icon-disc cont-large"><img src="img/team-leader-pic1.jpg" style="width:90px; border-radius:45px;"></i></div>
                    <h6>
                        <p><span>Giovanni Alcantara<br></span><h9>5 hrs ago</h9></p>
                    </h6>
                    <p>
                        I'm in London.
                    </p>
                    </div> 
                
            </div> 
                
            <div class="col-sm-6 col-md-3">
                <div class="tile">
                    <div class="intro-icon-disc cont-large"><img src="img/team-leader-pic3.jpg" style="width:90px; border-radius:45px;"></i></div>
                    <h6>
                        <p><span>Random Woman<br></span><h9>19 secs ago</h9></p>
                    </h6>
                    <p>
                        I'm feeling good.
                    </p>
                    </div> 
                
            </div>
        </div>

        <div class="row pad45">
            <div class="col-sm-6 col-md-3">
                <div class="tile">
                    <div class="intro-icon-disc cont-large"><img src="img/team-leader-pic2.jpg" style="width:90px; border-radius:45px;"></i></div>
                    <h6>
                        <p><span>Martin Georgiev<br></span><h9>2 hrs ago</h9></p>
                    </h6>
                    <p>
                        I'm reading Harry Potter.
                    </p>
                    </div> 
                
            </div> 
                
            <div class="col-sm-6 col-md-3">
                <div class="tile">
                    <div class="intro-icon-disc cont-large"><img src="img/team-leader-pic1.jpg" style="width:90px; border-radius:45px;"></i></div>
                    <h6>
                        <p><span>Giovanni Alcantara<br></span><h9>16 mins ago</h9></p>
                    </h6>
                    <p>
                        I love hackathons.
                    </p>
                    </div> 
                
            </div> 
                    
            <div class="col-sm-6 col-md-3">
                <div class="tile">
                    <div class="intro-icon-disc cont-large"><img src="img/team-leader-pic3.jpg" style="width:90px; border-radius:45px;"></i></div>
                    <h6>
                        <p><span>Random Lady<br></span><h9>7 hrs ago</h9></p>
                    </h6>
                    <p>
                        Travelling to Edinburgh.
                    </p>
                    </div> 
            </div> 
                
            <div class="col-sm-6 col-md-3">
                <div class="tile">
                    <div class="intro-icon-disc cont-large"><img src="img/team-leader-pic1.jpg" style="width:90px; border-radius:45px;"></i></div>
                    <h6>
                        <p><span>Giovanni Alcantara<br></span><h9>19 secs ago</h9></p>
                    </h6>
                    <p>
                        I'm feeling good.
                    </p>
                    </div> 
            </div>
        </div>
    </div>
</section>



<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#">{{ HTML::image('img/footer-logo.png') }}</a></div>
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




