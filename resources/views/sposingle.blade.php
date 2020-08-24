@extends('layout.main')
@section('content')

<main role="main">
	
	
	
  <section class="page-banner">
    <div class="banner-img banner-fade animated scaleOut" style="background-image: url('{{Voyager::image($sport->featured_image)}}');"></div>
  </section>
	
	
	
  <div class="mt-5 mb-3 interna">
    <h2></h2>
  </div>
	
	
	
  <div class="row interna">
    <div class="col-md-12">
      <div class="container mb-5">
        <div class="row">
          <div class="col-md-6">
            {!!$sport->block1!!}
          </div>
          <div class="col-md-6"> <img  src="{{Voyager::image($sport->image1)}}" alt="" class="img-thumbnail img-thumb"> </div>
          <div class="clearfix line2"></div>
          <div class="col-md-6"> <img  src="{{Voyager::image($sport->image2)}}" alt="" class="img-thumbnail img-thumb"> </div>
          <div class="col-md-6">
            {!!$sport->block2!!}</div>
          <div class="clearfix line2"></div>
          <div class="col-md-6">
            {!!$sport->block3!!}</div>
          <div class="col-md-6"> <img  src="{{Voyager::image($sport->image3)}}" alt="" class="img-thumbnail img-thumb"> </div>
          <div class="clearfix line2"></div>
          <div class="col-md-6"> <img  src="{{Voyager::image($sport->image4)}}" alt="" class="img-thumbnail img-thumb"> </div>
          <div class="col-md-6">
            {!!$sport->block4!!}          </div>
        </div>
      </div>
      <!-- <section class="">
        <div class="row mx-15">
          <div class="col-md-12 px-0">
            <section id="video-over" class="text-center" style="background-image: url('{{Voyager::image($sport->featured_image)}}');">
              <div class="col-md-12 mx-auto">
                <div class="video-pl"> <a data-lity href="#inline" ><span class="ply-btn large"  id="play-button"><i class="fa fa-play"></i></span> </a> </div>
                <div id="video_container"></div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <div id="inline"  style="overflow:auto;background:#FDFDF6;padding:20px;width:600px;max-width:100%;border-radius:6px" class="lity-hide">
        {!!$sport->embed_code!!}
    </div> -->
    </div>
  </div>
	
	
	
  <section class="news px-3 noticias">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-lg-12">
          <div class="mt-3 mb-4">
            <h2>Noticias</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-carousel owl-theme " id="noticias">
            @foreach($newses as $news)
            <div class=" news-item ">
              <div class="bg-white card aaSadow border-0"> <a href=""> <img class="card-img-top" src="{{Voyager::image($news->top_image)}}" alt=""> </a>
                <div class="card-body">
                  <h6 class=""> {{$news->lead}} </h6>
                  <h5 class="card-title"><a href="{{url('/noticias')}}/{{$news->slug}}">{{$news->title}}</a></h5>
                  <p class="card-text">{{$news->excerpt}}</p>
                 <a class="more-news" href="{{url('/noticias')}}/{{$news->slug}}">Ver más..</a> </div>
              </div>
            </div>
            @endforeach
           
          </div>
        </div>
        <div class="col-md-12 text-center"> <a href="{{url('/noticias')}}" class="btn-outline-boca">Más noticias</a> </div>
      </div>
    </div>
  </section>
	
	
	
</main>


@endsection