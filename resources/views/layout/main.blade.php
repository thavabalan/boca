<!DOCTYPE html>
<html lang="es">
<title>Boca Juniors</title>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="keywords" />
<meta name="description" />
	
	
	
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/animate.css" />
<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
<link rel="stylesheet" href="assets/css/boca-deportes.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/lity.css" />

<!-- Menu -->
<link rel="stylesheet" type="text/css" href="assets/css/mega_menu.css" />
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
<!-- Menu -->

</head>

<body>
	
	
	
<div id="top-navbar" class="menu">
  <nav id="menu" class="mega-menu">
    <section class="menu-list-items">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <ul class="menu-logo">
              <li> <a href="index.html"><img id="logo_img" src="images/logo.png" alt="logo"> </a> </li>
            </ul>
            <div id="nav_divMainMenu" class="menu-bar">
              <ul class="menu-links" style="display: none;  overflow: auto;">
                <li class="menu-item-parent"> <a href="">Home</a> </li>
                <li class="menu-item-parent"> <a href="">Deportes</a> </li>
                <li class="menu-item-parent"> <a href="">Noticias</a> </li>
                <li class="menu-item-parent"> <a href="">Videos</a> </li>
                <li class="menu-item-parent"> <a href="">Redes</a> </li>
                <li class="menu-item-parent"> <a href="">#Perfilesxeneixe</a> </li>
                <li class="menu-item-parent"> <a href="">Momentos</a> </li>
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
      <div class="col-md-1 logo-footer"> <img src="images/logo.png"> </div>
      <div class="col-md-7 text-center ">
        <p><img src="images/star.png">&nbsp;www.deportesboca.com.ar </p>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <p><img src="images/star.png">&nbsp;Brandsen 805, Capital Federal</p>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <p>Vení a hacer deportes en Boca.</p>
      </div>
      <div class="col-md-2 text-center sumate">
        <button class="btn-outline-boca-amarillo" href="#sumate" data-lity>Sumate!</button>
      </div>
      <div class="col-md-2 text-center ">
        <ul class="list-unstyled socials">
          <li><a class="twitter" target="_blank" href=""><i class="fab fa-twitter"></i></a></li>
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
  <form action="" method="post">
    <input name="nombre" placeholder="Nombre" type="text" tabindex="1" required >
    <input name="telefono" placeholder="Teléfono" type="text" tabindex="1" required >
    <input name="email" placeholder="Email" type="email" tabindex="2" required>
    <button class="btn-outline-boca" name="submit" type="submit" data-submit="...Enviar" title="">Enviar</button>
  </form>
</div>
<!-- Sumate PopUP --> 
	
	
	
<a href="#" class="back-to-top" title=""><i class="fa fa-chevron-up"></i></a> 
	
	
	
<script src="assets/js/jquery-3.5.0.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/fontawesome.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/boca-deportes.js"></script> 
<script src="assets/js/lity.js"></script> 

<!-- menu --> 
<script> var plugin_path = 'assets/js/'; </script> 
<!-- menu --> 

</body>
</html>





<script>


$(document).ready(function () {

	var params = {};
	var ps = window.location.search.split(/\?|&/);
	for (var i = 0; i < ps.length; i++) {
		if (ps[i]) {
			var p = ps[i].split(/=/);
			params[p[0]] = p[1];
		}
	}
	if (ps == ",p") {
		$("#homevideo").prop('muted', false);
		$(".fa-volume-up").show();
		$(".fa-volume-off").hide();
	} else {

		$("#homevideo").prop('muted', true);
		$(".fa-volume-up").hide();
		$(".fa-volume-off").show();
	}







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
 
});
	
</script>
