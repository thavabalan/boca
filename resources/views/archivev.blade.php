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
              <h2 class="noticias1">Videos</h2>
            </div>
          </div>
          <div class="row">
              @foreach($videos as $item)
            <div class="col-md-3"><div class=" news-item ">
                <div class="bg-white card aaSadow border-0"> <a href="{{url('/videos')}}/{{$item->id}}"> <img class="card-img-top" src="{{asset('/storage')}}/{{$item->image}}" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> {{$item->lead}}  </h6>
                  <h5 class="card-title"><a href="{{url('/videos')}}/{{$item->id}}">{{$item->title}}</a></h5>
                    <p class="card-text">{{$item->excerpt}}</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>{{$item->created_at->format('d F Y')}} </small> <a class="more-news" href="{{url('/videos')}}/{{$item->id}}">Ver más..</a> </div>
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
              
              
              
              
              
              
              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2165px, 0px, 0px); transition: all 0.25s ease 0s; width: 5260px;">
              
              <div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> 
                 @if(!empty($twittes))
                @foreach($twittes as $key => $value) 
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Sunsets don&#39;t get much better than this one over <a href="https://twitter.com/GrandTetonNPS?ref_src=twsrc%5Etfw">@GrandTetonNPS</a>. <a href="https://twitter.com/hashtag/nature?src=hash&amp;ref_src=twsrc%5Etfw">#nature</a> <a href="https://twitter.com/hashtag/sunset?src=hash&amp;ref_src=twsrc%5Etfw">#sunset</a> <a href="http://t.co/YuKy2rcjyU">pic.twitter.com/YuKy2rcjyU</a></p>&mdash; US Department of the Interior (@Interior) <a href="https://twitter.com/Interior/status/{{$value['id']}}?ref_src=twsrc%5Etfw">May 5, 2014</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                
          @endforeach
            @else
                
                    <p colspan="6">There are no data.</p>
              
            @endif
              </div></div>
              
              </div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
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