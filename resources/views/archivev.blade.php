@extends('layout.main')
@section('content')
<main role="main">
	
	
	
    <div class="container-fluid">
      <div class="row"> </div>
    </div>
      
      
      
    
      
      
      
    
      
      
      
    
      
      
      
    <section class="news px-3 noticias videos" style="
      padding-top: 9em;
  ">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-lg-12">
            <div class="mt-3 mb-4">
              <h2 class="noticias1">Videos</h2>
            </div>
          </div>
          <div class="row">
              @foreach($videos as $item)
            <div class="col-md-3"><div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <span class="ply-btn medium"><i class="fa fa-play"></i></span>   <a href="{{url('/videos')}}/{{$item->id}}"> <img class="card-img-top" src="{{asset('/storage')}}/{{$item->image}}" alt=""> </a>
                
                <div class="card-body">
                    <h6 class=""> {{$item->lead}}  </h6>
                  <h5 class="card-title"><a href="{{url('/videos')}}/{{$item->id}}">{{$item->title}}</a></h5>
                    <p class="card-text">{{$item->excerpt}}</p>
                     <a class="more-news" href="{{url('/videos')}}/{{$item->id}}">Ver más..</a> </div>
                </div>
              </div></div>@endforeach
              
            
          </div>
          <div class="col-md-12 text-center"> <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{ $videos->links() }}
            </ul>
          </nav> </div>
        </div>
      </div>
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
            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="rss">
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
                @foreach($perfilesxeneizes->slice(0,3) as $item)

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