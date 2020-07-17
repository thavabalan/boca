@extends('layout.main')
@section('content')
<main role="main">
	
	
	
    <div class="container-fluid">
      <div class="row"> </div>
    </div>
      
      
      
    <section class="intro-video">
      <div class="videoContainer">
        <video autoplay loop muted playsinline id="homevideo">
          <source src="https://player.vimeo.com/external/434831437.hd.mp4?s=47b7664a78afc6166c8e976b72fc5252522412b5&profile_id=175" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
      </div>
      <div class="mute_unmute animated fadeIn" style="">
        <div id="mute-video"><i class="fa fa-volume-up fa-2x"></i><i class="fa fa-volume-off fa-2x"></i></div>
      </div>
      <a href="javascript:void(0);" class="scroll-down" title="Scroll Down">
      <div class="mousey">
        <div class="scroller"></div>
      </div>
      </a>
   </section>
      
      
      
    <section class="container my-5 bienvenido text-center">
      <h1 class="pb-3">BOCA apuesta al futuro.</h1>
      <h2 class="pb-5">Conocé más sobre nuestros Deportes Amateurs, <br>
        y sus futuros campeones.</h2>
      <a href="" class="btn-outline-boca">Conocé más</a>
    </section>
      
      
      
    <section class="features deportes">
      <div class="owl-carousel owl-theme " id="deportes" > <a href="">
        <div class="card"> <img class="card-img-top" src="images/deportes/voley.jpg" alt="">
          <div class="card-body">
            <h1>Voley Femenino</h1>
            <h3>días y horarios</h3>
          </div>
        </div>
        </a> <a href="">
        <div class="card"> <img class="card-img-top" src="images/deportes/voley.jpg" alt="">
          <div class="card-body">
            <h1>Voley Femenino</h1>
            <h3>días y horarios</h3>
          </div>
        </div>
        </a> <a href="">
        <div class="card"> <img class="card-img-top" src="images/deportes/voley.jpg" alt="">
          <div class="card-body">
            <h1>Voley Femenino</h1>
            <h3>días y horarios</h3>
          </div>
        </div>
        </a> <a href="">
        <div class="card"> <img class="card-img-top" src="images/deportes/voley.jpg" alt="">
          <div class="card-body">
            <h1>Voley Femenino</h1>
            <h3>días y horarios</h3>
          </div>
        </div>
        </a> <a href="">
        <div class="card"> <img class="card-img-top" src="images/deportes/voley.jpg" alt="">
          <div class="card-body">
            <h1>Voley Femenino</h1>
            <h3>días y horarios</h3>
          </div>
        </div>
        </a> <a href="">
        <div class="card"> <img class="card-img-top" src="images/deportes/voley.jpg" alt="">
          <div class="card-body">
            <h1>Voley Femenino</h1>
            <h3>días y horarios</h3>
          </div>
        </div>
        </a> <a href="">
        <div class="card"> <img class="card-img-top" src="images/deportes/voley.jpg" alt="">
          <div class="card-body">
            <h1>Voley Femenino</h1>
            <h3>días y horarios</h3>
          </div>
        </div>
        </a> <a href="">
        <div class="card"> <img class="card-img-top" src="images/deportes/voley.jpg" alt="">
          <div class="card-body">
            <h1>Voley Femenino</h1>
            <h3>días y horarios</h3>
          </div>
        </div>
        </a> </div>
    </section>
      
      
      
    <section class="news px-3 noticias">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-lg-12">
            <div class="mt-3 mb-4">
              <h2>Más Noticias</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme " id="noticias">
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/1.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Amateur </h6>
                    <h5 class="card-title"><a href="">El equipo de lucha, con objetivos renovados</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/2.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Voley </h6>
                    <h5 class="card-title"><a href="">Esto es algo que sacude al deporte a nivel mundial</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/3.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Voley </h6>
                    <h5 class="card-title"><a href="">Un regalo de 10</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/4.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Ajedrez </h6>
                    <h5 class="card-title"><a href="">El ajedrez reunió a más de mil jugadores en su torneo digital</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/5.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Amateur </h6>
                    <h5 class="card-title"><a href="">Queremos poner a Boca en la elite</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/1.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Amateur </h6>
                    <h5 class="card-title"><a href="">El equipo de lucha, con objetivos renovados</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/2.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Voley </h6>
                    <h5 class="card-title"><a href="">Esto es algo que sacude al deporte a nivel mundial</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/3.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Voley </h6>
                    <h5 class="card-title"><a href="">Un regalo de 10</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/4.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Ajedrez </h6>
                    <h5 class="card-title"><a href="">El ajedrez reunió a más de mil jugadores en su torneo digital</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
              <div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="images/noticias/5.jpg" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> Amateur </h6>
                    <h5 class="card-title"><a href="">Queremos poner a Boca en la elite</a></h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>08 Junio 2020 </small> <a class="more-news" href="">Ver más..</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center"> <a href="" class="btn-outline-boca">Más noticias</a> </div>
        </div>
      </div>
    </section>
      
      
      
    <section class="features videos">
      <div class="col-md-12">
        <div class="mt-2 mb-3">
          <h2>Videos</h2>
        </div>
      </div>
      <div class="owl-carousel owl-theme" id="videos" > <a data-lity href="https://www.youtube.com/embed/MHhsfOUGA5I">
        <div class="card"> <img class="card-img-top" src="images/videos/1.jpg" alt="">
          <div class="card-body text-center"> <span class="ply-btn medium"><i class="fa fa-play"></i></span>
            <h1>Voley</h1>
            <h3>Superclásico</h3>
          </div>
        </div>
        </a> <a data-lity href="https://www.youtube.com/embed/MHhsfOUGA5I">
        <div class="card"> <img class="card-img-top" src="images/videos/2.jpg" alt="">
          <div class="card-body text-center"> <span class="ply-btn medium"><i class="fa fa-play"></i></span>
            <h1>amateur</h1>
            <h3>backstage fotos</h3>
          </div>
        </div>
        </a> <a data-lity href="https://www.youtube.com/embed/MHhsfOUGA5I">
        <div class="card"> <img class="card-img-top" src="images/videos/3.jpg" alt="">
          <div class="card-body text-center"> <span class="ply-btn medium"><i class="fa fa-play"></i></span>
            <h1>Futsal</h1>
            <h3>temporada 2021</h3>
          </div>
        </div>
        </a> <a data-lity href="https://www.youtube.com/embed/MHhsfOUGA5I">
        <div class="card"> <img class="card-img-top" src="images/videos/1.jpg" alt="">
          <div class="card-body text-center"> <span class="ply-btn medium"><i class="fa fa-play"></i></span>
            <h1>Voley</h1>
            <h3>Superclásico</h3>
          </div>
        </div>
        </a> <a data-lity href="https://www.youtube.com/embed/MHhsfOUGA5I">
        <div class="card"> <img class="card-img-top" src="images/videos/2.jpg" alt="">
          <div class="card-body text-center"> <span class="ply-btn medium"><i class="fa fa-play"></i></span>
            <h1>amateur</h1>
            <h3>backstage fotos</h3>
          </div>
        </div>
        </a> <a data-lity href="https://www.youtube.com/embed/MHhsfOUGA5I">
        <div class="card"> <img class="card-img-top" src="images/videos/3.jpg" alt="">
          <div class="card-body text-center"> <span class="ply-btn medium"><i class="fa fa-play"></i></span>
            <h1>Futsal</h1>
            <h3>temporada 2021</h3>
          </div>
        </div>
        </a> </div>
      <div class="col-md-12 videos-bottom"> <a href="" class="btn-outline-boca-amarillo">Ir a la playlist</a> </div>
    </section>
      
      
      
    <section class="news px-3 rss">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-lg-12">
            <div class="mt-3 mb-4">
              <h2>@deportesboca</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme " id="rss">
              <div class=" news-item "> <a href="">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss/tweet.png" alt=""> </div>
                </a> </div>
              <div class=" news-item "> <a href="">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss/tweet.png" alt=""> </div>
                </a> </div>
              <div class=" news-item "> <a href="">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss/tweet.png" alt=""> </div>
                </a> </div>
              <div class=" news-item "> <a href="">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss/tweet.png" alt=""> </div>
                </a> </div>
              <div class=" news-item "> <a href="">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss/tweet.png" alt=""> </div>
                </a> </div>
              <div class=" news-item "> <a href="">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss/tweet.png" alt=""> </div>
                </a> </div>
              <div class=" news-item "> <a href="">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss/tweet.png" alt=""> </div>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      
      
      
    <section class="media media-title pb-5 perfiles">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mt-3 mb-4">
              <h2>#PerfilesXeneizes</h2>
            </div>
          </div>
          <div class="col-md-12 col-lg-12" >
            <div class="row">
              <div class="col-md-4"> <a href="">
                <div class="card"> <img class="card-img-top" src="images/perfiles/1.jpg" alt="">
                  <div class="card-body">
                    <h5>Eduardo Allona, DT del vóley femenino de Boca</h5>
                    <p class="text-white">Safety measures guarantee the health and well-being of grade 12 students...</p>
                  </div>
                </div>
                </a> </div>
              <div class="col-md-4"> <a href="">
                <div class="card"> <img class="card-img-top" src="images/perfiles/2.jpg" alt="">
                  <div class="card-body">
                    <h5>Chu Cossar, una guerrera con perfil xeneize</h5>
                    <p class="text-white">Safety measures guarantee the health and well-being of grade 12 students...</p>
                  </div>
                </div>
                </a> </div>
              <div class="col-md-4"> <a href="">
                <div class="card"> <img class="card-img-top" src="images/perfiles/3.jpg" alt="">
                  <div class="card-body">
                    <h5>Guido Mosenson, el arquero de Boca en futsal</h5>
                    <p class="text-white">Safety measures guarantee the health and well-being of grade 12 students...</p>
                  </div>
                </div>
                </a> </div>
            </div>
          </div>
          <div class="col-md-12 text-center mt-4"> <a href="" class="btn-outline-boca">Más perfiles</a> </div>
        </div>
      </div>
    </section>
      
      
      
    <section class="features momentos">
      <div class="col-md-12">
        <div class="mt-3 mb-4">
          <h2>Momentos</h2>
        </div>
      </div>
      <div class="owl-carousel owl-theme" id="momentos" >
        <div class="card"> <img class="card-img-top" src="images/momentos/1.jpg" alt="">
          <div class="card-body">
            <h3></h3>
          </div>
        </div>
        <div class="card"> <img class="card-img-top" src="images/momentos/2.jpg" alt="">
          <div class="card-body">
            <h3></h3>
          </div>
        </div>
        <div class="card"> <img class="card-img-top" src="images/momentos/3.jpg" alt="">
          <div class="card-body">
            <h3></h3>
          </div>
        </div>
      </div>
    </section>
      
      
      
  </main>
@endsection