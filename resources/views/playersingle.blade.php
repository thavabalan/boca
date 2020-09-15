@extends('layout.main')
@section('content')

<main role="main">
	
	
	
    <section class="page-banner">
    <h1 class="team-title">{{$team->title}}</h1>
    <div class="banner-img banner-fade animated scaleOut" style="background-image: url('{{Voyager::image($team->featured_image)}}');"></div>
    </section>
      
      
      
    <div class="container-fluid">
      <div class="row"> </div>
    </div>
      
      
      
    <div class="row ">
      <div class="col-md-12 noticias news">
        <div class="container mb-5">
          <!-- <div class="mt-3 mb-4">
            <h2>Plantel</h2>
          </div> -->
          <div class="row flex ficha"><div class="col-md-6 detalle">
    <h1 class="nombre">{{$player->name}}</h1>
    <h2 class="posicion"><span class="item">Posicion:</span> {{$player->position}}</h2>
    <p><img src="https://clubatletico.bocajuniors.com.ar/images/star.png"><span class="item">Fecha de Nacimiento: </span><span>{{$player->dob}}</span></p>
    <p><img src="https://clubatletico.bocajuniors.com.ar/images/star.png"><span class="item">Lugar de Nacimiento: </span><span>{{$player->place_of_birth}}</span></p>
    <p><img src="https://clubatletico.bocajuniors.com.ar/images/star.png"><span class="item">Nacionalidad: </span><span>{{$player->nationality}}</span></p>
    <p><img src="https://clubatletico.bocajuniors.com.ar/images/star.png"><span class="item">Altura:</span><span>{{number_format($player->height/100,2)}}</span></p>
    <p><img src="https://clubatletico.bocajuniors.com.ar/images/star.png"><span class="item">Peso:</span><span>{{$player->weight}}</span></p>

    <button class="btn-outline-boca-amarillo" href="#sumate" data-lity="">Volver al plantel</button>
</div><div class="col-md-6"><img class="card-img-top" src="https://clubatletico.bocajuniors.com.ar/storage/players/September2020/wPtqwDjCXzPU0cYzOS4T.jpg">
                          
                        
                        
                        
          </div></div>

          
            <div class="clearfix"></div>
           
        </div>
      </div>
    </div>
  </main>

@endsection