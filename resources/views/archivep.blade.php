@extends('layout.main')
@section('content')
<main role="main">
	
	
	
    <div class="container-fluid">
      <div class="row"> </div>
    </div>
      
      
      
    
      
      
      
    
      
      
      
    
      
      
    <section class="media media-title pb-5 perfiles" style="
    padding-top: 9em;
">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="mt-3 mb-4">
              <h2>#PerfilesXeneizes</h2>
            </div>
          </div>
          <div class="col-md-12 col-lg-12" >
                      <div class="infinite-scroll">

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
            <div class="col-md-12 text-center"> <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{ $perfilesxeneizes->links() }}
            </ul>
          </nav> </div>
          </div>    
          </div>
          <!-- <div class="col-md-12 text-center mt-4"> <a href="/perfiles" class="btn-outline-boca">Más perfiles</a> </div> -->
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
            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="rss">
              
              
              
              
              
              
              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2165px, 0px, 0px); transition: all 0.25s ease 0s; width: 5260px;"><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss/tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item active" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item active" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item active" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item active" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item active" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div><div class="owl-item cloned" style="width: 294.4px; margin-right: 15px;"><div class=" news-item "> <a href="http://localhost/boca/">
                <div class="bg-white card aaSadow border-0"> <img class="card-img-top" src="images/rss//tweet.png" alt=""> </div>
                </a> </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
          </div>
        </div>
      </div>
    </section>
      
      
      
    <section class="media media-title pb-5 perfiles">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mt-3 mb-4">
              <h2>Noticias</h2>
            </div>
          </div>
          <div class="col-md-12 col-lg-12">
            <div class="row">
                @foreach($news as $item)

              <div class="col-md-4"> <a href="{{url('/noticias')}}/{{$item->slug}}">
                <div class="card"> <img class="card-img-top" src="{{asset('/storage')}}/{{$item->top_image}}" alt="">
                  <div class="card-body">
                    <h5>{{$item->title}}</h5>
                    <p class="text-white">{{$item->excerpt}}</p>
                  </div>
                </div>
                </a> </div>
                @endforeach
            </div>
          </div>
          <div class="col-md-12 text-center mt-4"> <a href="{{url('/noticias')}}" class="btn-outline-boca">Más perfiles</a> </div>
        </div>
      </div>
    </section>
      
      
      
   
      
      
      
  </main>
  @endsection