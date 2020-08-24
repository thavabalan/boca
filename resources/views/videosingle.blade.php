@extends('layout.main')
@section('content')

<main role="main">
	
	
	
    <section class="page-banner">
    <div class="banner-img banner-fade animated scaleOut" style="background-image: url('{{Voyager::image($video->image)}}');"></div>
    </section>
      
      
      
    <div class="container-fluid">
      <div class="row"> </div>
    </div>
      
      
      
    <div class="row noticias-interna">
      <div class="col-md-12">
        <div class="container mb-5">
          <div class="row">
            <div class="col-md-12">
              <h6 class="mt-5">{{$video->created_at->format('d-m-y')}}</h6>
            <h2 class="">{{$video->title}}</h2>
            <div class="video-responsive">
              {!!$video->embed_code!!}
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
      
      
    <section class="features videos">
      <div class="col-md-12">
        <div class="mt-2 mb-3">
          <h2>Videos</h2>
        </div>
      </div>
      <div class="owl-carousel owl-theme" id="videos" >
        @foreach($videos->slice(0, 6) as $video)
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
  </main>

@endsection