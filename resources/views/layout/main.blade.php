<!DOCTYPE html>
<html lang="es">
<title>Boca Juniors</title>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="keywords" />
<meta name="description" />
	
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
	
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}" />
<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}" />
<link rel="stylesheet" href="{{asset('/assets/css/boca-deportes.css')}}" />
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('/assets/css/lity.css')}}" />

<!-- Menu -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/mega_menu.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}" />
<!-- Menu -->

<style>
.intro #videoCover{
    left: 0;
}
.mega-menu .menu-logo{
    position: absolute;
    transition: all .5s ease;
    left: 0;
}
.mega-menu .menu-bar{
	right: 0;
    transition: all .5s ease;
    transition-delay: .5s;
	position:absolute;
}
.mega-menu.intro .menu-bar{
    right: -600px;
}
.mega-menu.intro .menu-logo{
    left: calc(50% - 30px);
}
#playCTA{
            position: absolute;
            z-index: 2;
            color: white;
            font-family: 'Bebas Neue', cursive;
            right: 2em;
            top: 50%;
            cursor: pointer;
width:100%;
text-align:right;
font-style: italic;
        }
#playCTA .play-text{
vertical-align: middle;
    font-size: 50px;
margin-left:5px;
}
#playCTA .ply-btn.medium{
	    margin-left: 25px;
	    line-height: 58px;
	padding-top:0;
}
.intro #videoCover{
left:0;
}
	#videoCover{
            object-fit: cover;
            width: 100%;
            height: 100vh;
            z-index: 0;
            position: absolute;
    left: -100%;
    transition: all .5s ease;
        }
@media screen and (max-width:600px){
	#playCTA{
	right:1em;
}
}
</style>
</head>

<body>
	
	
<div id="top-navbar" class="menu">
  <nav id="menu" class="mega-menu {{ Request::is('/') ? 'intro' : '' }}">
    <section class="menu-list-items">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <ul class="menu-logo">
              <li> <a href="/"><img id="logo_img" style="max-width:100px !important" src="/storage/{{setting('site.logo')}}" alt="logo"> </a> </li>
            </ul>
            <div id="nav_divMainMenu" class="menu-bar">
              <ul class="menu-links" style="display: none;  overflow: auto;">
                <li class="menu-item-parent {{ Request::is('/') ? 'active' : '' }}"> <a href="/">Home</a> </li>
                <li class="menu-item-parent"> <a href="/#deportes1">Deportes</a> </li>
                <li class="menu-item-parent {{ Request::is('/noticias') ? 'active' : '' }}"> <a href="{{ url('/noticias' )}}">Noticias</a> </li>
              <li class="menu-item-parent"> <a href="/videos">Videos</a> </li>
                <!--<li class="menu-item-parent"> <a href="">Redes</a> </li>-->
                <li class="menu-item-parent {{ Request::is('/perfiles') ? 'active' : '' }}"> <a href="{{route('perfiles')}}">#Perfilesxeneixes</a> </li>
                <li class="menu-item-parent"> <a href="/#momentos1">Momentos</a> </li>
                <li class="menu-item-parent redes"> <a class="twitter" target="_blank" href=""><i class="fab fa-twitter"></i></a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </nav>
</div>
	
	
	
@yield('content')	
	
	
<footer class="footer-text">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1 logo-footer"> <img src="{{asset('images/logo.png')}}"> </div>
      <div class="col-md-7 text-center ">
        <p><img src="{{asset('images/star.png')}}">&nbsp;www.deportesboca.com.ar </p>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <p><img src="{{asset('images/star.png')}}">&nbsp;Brandsen 805, Capital Federal</p>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <p>Vení a hacer deportes en Boca.</p>
      </div>
      <div class="col-md-2 text-center sumate">
        <button class="btn-outline-boca-amarillo" href="#sumate" data-lity>Sumate!</button>
      </div>
      <div class="col-md-2 text-center ">
        <ul class="list-unstyled socials">
          <li><a class="twitter" target="_blank" href="https://twitter.com/deportesboca"><i class="fab fa-twitter"></i></a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12 text-center copyright">
        <p class="">© Copyright 2020 Boca Juniors</p>
      </div>
    </div>
  </div>
</footer>
	
	
<!-- Sumate PopUP --> 
<div id="sumate" class="lity-hide sumate-form">
  <h2 class="">Sumate!</h2>
  <p>Completá tus datos</p>
  <form action="{{ route('contact.store') }}" method="post">
    @csrf
    <input name="nombre" placeholder="Nombre" type="text" tabindex="1" required >
    <input name="telefono" placeholder="Teléfono" type="text" tabindex="1" required >
    <input name="email" placeholder="Email" type="email" tabindex="2" required>
    <button class="btn-outline-boca" name="submit" type="submit" data-submit="...Enviar" title="">Enviar</button>
  </form>
</div>
<!-- Sumate PopUP --> 
	
	
	
<a href="#" class="back-to-top" title=""><i class="fa fa-chevron-up"></i></a> 
	
	
	
<script src="{{asset('assets/js/jquery-3.5.0.min.js')}}"></script> 
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/js/wow.min.js')}}"></script> 
<script src="{{asset('assets/js/fontawesome.min.js')}}"></script> 
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('assets/js/boca-deportes.js')}}"></script> 
<script src="{{asset('assets/js/lity.js')}}"></script> 

<!-- menu --> 
<script> var plugin_path = '{{asset('assets/js/')}}'; </script> 
<!-- menu --> 

</body>
</html>





<script>
$(document).ready(function () {
  $("#homevideo")[0].addEventListener('ended',()=>{
    $("#homevideo").prop('muted', true);
    $("#homevideo")[0].play();
    $(".fa-volume-up").hide();
    $(".fa-volume-off").show();
  });
  if(window.location.pathname=='/' && !window.location.hash) 
  {
    $('.menu-logo a').attr('href','#');
    window.scrollTo(0,0);
    $('html').css('overflow', 'hidden');
  }
  else
  {
    $('.mega-menu .menu-logo').css('transition','none');
    $('.mega-menu .menu-bar').css('transition','none');
    $("#homevideo").prop('muted', true);
    $("#homevideo").prop('autoplay', true);
    $(".fa-volume-up").hide();
    $(".fa-volume-off").show();
    $('#playCTA').hide();
    $('.intro').removeClass('intro');

  }
	var params = {};
	var ps = window.location.search.split(/\?|&/);
	for (var i = 0; i < ps.length; i++) {
		if (ps[i]) {
			var p = ps[i].split(/=/);
			params[p[0]] = p[1];
		}
	}
$(".fa-volume-up").hide();
                $(".fa-volume-off").hide();
/*
	if (ps == ",p") {
		$("#homevideo").prop('muted', false);
		$(".fa-volume-up").show();
		$(".fa-volume-off").hide();
	} else {

		$("#homevideo").prop('muted', true);
		$(".fa-volume-up").hide();
		$(".fa-volume-off").show();
	}

*/





	$("#mute-video").click(function () {
		if ($("#homevideo").prop('muted')) {


			$("#homevideo").prop('muted', false);
			$(".fa-volume-up").show();
			$(".fa-volume-off").hide();

		} else {
			$("#homevideo").prop('muted', true);
			$(".fa-volume-up").hide();
			$(".fa-volume-off").show();
		}
	});
	$("#playCTA").click(function () {
    $('#videoCover').hide();
    $('.menu-logo a').attr('href','/');
    $("html").css("overflow","auto")
    $('.intro').removeClass('intro');
if(Cookies.get('videoplayed'))
{
    $("#homevideo").prop('muted', true);
    $(".fa-volume-up").hide();
    $(".fa-volume-off").show();
}
else
{
$(".fa-volume-up").show();
                $(".fa-volume-off").hide();
Cookies.set('videoplayed', true);
$("#homevideo").prop('muted', false);
}		
$("#homevideo")[0].play();
		$(this).hide();
		//$('#videoCover').hide(); 
        });
 
});
	
</script>
