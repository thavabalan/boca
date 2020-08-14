@extends('layout.main')
@section('content')

<style>
.twt{
  background-color:red;
  min-height:300px;
}

.im{
  border-radius: 50%;
  height: 50px;
  width:50px !important;
}

  </style>
<main role="main">
	
	
    <div class="container-fluid">
      <div class="row"> </div>
    </div>
      
      <!-- comment -->
      
    <section class="intro-video intro">
	<div id="playCTA"><span class="play-text">Un club atletico</span> <span class="ply-btn medium"><i class="fa fa-play"></i></span></div>
      <div class="videoContainer">
        <img id="videoCover" src="http://deportesboca.lineadgroup.com/storage/play.jpg"/>
	<video playsinline id="homevideo">
          <source src="https://content.jwplatform.com/videos/sVzKg4Ti-AuTjtEnY.mp4" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
      </div>
      <div class="mute_unmute animated fadeIn" style="">
        <div id="mute-video"><i class="fa fa-volume-up fa-2x"></i><i class="fa fa-volume-off fa-2x"></i></div>
      </div>
      <a href="javascript:void(0);" class="scroll-down" title="Scroll Down">
     <!-- <div class="mousey">
        <div class="scroller"></div>
      </div>-->
      </a>
   </section>
      
      
      
    <section class="container my-5 bienvenido text-center">
      <h1 class="pb-3">BOCA apuesta al futuro.</h1>
      <h2 class="pb-5">Conocé más sobre nuestros Deportes Amateurs, <br>
        y sus futuros campeones.</h2>
      <a href="" class="btn-outline-boca">Conocé más</a>
    </section>
      
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
      
    <section class="features deportes" id="deportes1">
      <div class="owl-carousel owl-theme " id="deportes" > 
        @foreach($sports as $sport)
        <a href="/spo/{{$sport->id}}">
        <div class="card"> <img class="card-img-top" src="{{asset('/storage')}}/{{$sport->featured_image}}" alt="">
          <div class="card-body">
            <h1>{{$sport->title}}</h1>
           <!-- <h3>días y horarios</h3> -->
          </div>
        </div>
        </a> 
        @endforeach
      </div>
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
              @foreach ($news->slice(0, 10) as $item)
                  
              
              <div class=" news-item ">
              <div class="bg-white card aaSadow border-0"> <a href="noticias/{{$item->slug}}"> <img class="card-img-top" src="{{asset('/storage')}}/{{$item->top_image}}" alt=""> </a>
                  <div class="card-body">
                    <h6 class="">  {{$item->lead}} </h6>
                  <h5 class="card-title"><a href="noticias/{{$item->slug}}">{{$item->title}}</a></h5>
                    <p class="card-text">{!! Str::limit($item->excerpt, 100) !!}</p>
                    <!--<small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>{{$item->created_at->format('d F Y')}} </small>--> <a class="more-news" href="noticias/{{$item->slug}}">Ver más..</a> </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-md-12 text-center"> <a href="{{route('newsarchive')}}" class="btn-outline-boca">Más noticias</a> </div>
        </div>
      </div>
    </section>
      
      
      
    <section class="features videos" id="videos1">
      <div >
      <div class="col-md-12">
        <div class="mt-2 mb-3">
          <h2>#Videos</h2>
        </div>
      </div>
      <div class="owl-carousel owl-theme" id="videos" >
        @foreach($videos->slice(0, 3) as $video)
        <a data-lity href="#inline{{$video->id}}">
        <div class="card"> <img class="card-img-top" src="{{asset('/storage')}}/{{$video->image}}" alt="">
          <div class="card-body text-center"> <span class="ply-btn medium"><i class="fa fa-play"></i></span>
            <h1>{{$video->title}}</h1>
            <h3>{{$video->sub_title}}</h3>
          </div>
        </div>
        </a> 
       
        @endforeach
       </div>
      <div class="col-md-12 videos-bottom"> <a href="/videos" class="btn-outline-boca-amarillo">Ir a la playlist</a> </div>
      </div>
    </section>
    @foreach($videos as $video)

  <div id="inline{{$video->id}}"  style="overflow:auto;background:#FDFDF6;padding:20px;width:600px;max-width:100%;border-radius:6px" class="lity-hide">
      {!!$video->embed_code!!}
  </div>
  @endforeach
      
      
    <section class="news px-3 rss" >
      <div id="deportes">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-lg-12">
            <div class="mt-3 mb-4">
              <h2>@deportesboca</h2>
            </div>
          </div>


          <div class="col-md-12">
          <div class="owl-carousel owl-theme owl-loaded owl-drag " id="rss">
          @if(!empty($twittes))
                @foreach($twittes as $key => $value) 
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">{{$value['text']}}</p> {{$value['user']['name']}} (@ {{$value['user']['screen_name']}}) <a href="https://twitter.com/Interior/status/{{$value['id']}}?ref_src=twsrc%5Etfw">{{$value['created_at']}}</a></blockquote> 

          @endforeach
            @else
                
                    <p colspan="6">No hay tweets.</p>
              
            @endif
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            
</div>

        </div>
      </div></div>
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
              @foreach($perfilesxeneizes as $item)
              <div class="col-md-4"> <a href="perfiles/{{$item->slug}}">
                <div class="card"> <img class="card-img-top" src="{{asset('/storage')}}/{{$item->image}}" alt="">
                  <div class="card-body">
                    <h5>{{$item->title}}</h5>
                    <p class="text-white">{{$item->excerpt}}</p>
                  </div>
                </div>
                </a> </div>
                @endforeach
            </div>
          </div>
          <div class="col-md-12 text-center mt-4"> <a href="/perfiles" class="btn-outline-boca">Más perfiles</a> </div>
        </div>
      </div>
    </section>
      
    <section class="features momentos" id="momentos1">
      <div class="col-md-12">
        <div class="mt-3 mb-4">
          <h2>Momentos</h2>
        </div>
      </div>
      <div class="owl-carousel owl-theme" id="momentos" >
        @foreach($momentos as $momento)
        <div class="card"> <img class="card-img-top" src="{{Voyager::image($momento->image)}}" alt="">
          <div class="card-body">
            <h3></h3>
          </div>
        </div>
       @endforeach
      </div>
    </section>
      
  
      
      
  </main>
@endsection
