@extends('layout.main')
@section('content')
<main role="main">
	
	
	
    <div class="container-fluid">
      <div class="row"> </div>
    </div>
      
      
      
    
      
      
      
    
      
      
      
    
      
      
      
    <section class="news px-3 noticias" style="
      padding-top: 9em;
  ">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-lg-12">
            <div class="mt-3 mb-4">
              <h2 class="noticias1">Noticias</h2>
            </div>
          </div>
          <div class="row">
              @foreach($news as $item)
            <div class="col-md-3"><div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href="{{url('/noticias')}}/{{$item->slug}}"> <img class="card-img-top" src="{{asset('/storage')}}/{{$item->top_image}}" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> {{$item->lead}}  </h6>
                  <h5 class="card-title"><a href="{{url('/noticias')}}/{{$item->slug}}">{{$item->title}}</a></h5>
                    <p class="card-text">{{$item->excerpt}}</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>{{$item->created_at->format('d F Y')}} </small> <a class="more-news" href="{{url('/noticias')}}/{{$item->slug}}">Ver más..</a> </div>
                </div>
              </div></div>@endforeach
              
            
          </div>
          <div class="col-md-12 text-center"> <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{ $news->links() }}
            </ul>
          </nav> </div>
        </div>
      </div>
    </section>
      
      
      
    <section class="features videos">
      <div class="col-md-12">
        <div class="mt-2 mb-3">
          <h2>Videos</h2>
        </div>
      </div>
      <div class="owl-carousel owl-theme owl-loaded owl-drag" id="videos">       <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3296px, 0px, 0px); transition: all 0.25s ease 0s; width: 10688px; padding-left: 400px; padding-right: 400px;">
        @foreach($videos as $video)
        <div class="owl-item cloned" style="width: 824px;"><a data-lity="" href="https://www.youtube.com/embed/{{$video->video_id}}">
        <div class="card"> <img class="card-img-top" src="{{asset('/storage')}}/{{$video->image}}" alt="">
          <div class="card-body text-center"> <span class="ply-btn medium"><i class="fa fa-play"></i></span>
            <h1>{{$video->title}}</h1>
            <h3>Superclásico</h3>
          </div>
        </div>
        </a></div>
        @endforeach
   </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots disabled"></div></div>
      <div class="col-md-12 videos-bottom"> <a href="http://localhost/boca/" class="btn-outline-boca-amarillo">Ir a la playlist</a> </div>
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
          <div class="col-md-12 col-lg-12">
            <div class="row">
                @foreach($perfilesxeneizes as $item)

              <div class="col-md-4"> <a href="{{url('/perfiles')}}/{{$item->slug}}">
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
      
      
      
   
      
      
      
  </main>
  @endsection