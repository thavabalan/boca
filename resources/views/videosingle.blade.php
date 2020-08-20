@extends('layout.main')
@section('content')

<main role="main">
	
	
	
    <section class="page-banner">
    <div class="banner-img banner-fade animated scaleOut" style="background-image: url('{{Voyager::image($news->image)}}');"></div>
    </section>
      
      
      
    <div class="container-fluid">
      <div class="row"> </div>
    </div>
      
      
      
    <div class="row noticias-interna">
      <div class="col-md-12">
        <div class="container mb-5">
          <div class="row">
            <div class="col-md-12">
              <h6 class="mt-5">{{$news->created_at->format('d-m-y')}}</h6>
            <h2 class="">{{$news->title}}</h2>
            <div class="video-responsive">
              {!!$news->embed_code!!}
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
      
      
    <div class="row ">
      <div class="col-md-12 noticias">
        <div class="container mb-5">
          <div class="mt-3 mb-4">
            <h2>Videos</h2>
          </div>
          <div class="row flex">
              @foreach($newses as $item)
            <div class="col-md-4 content">
              <div class="news-item">
              <div class="bg-white card aaSadow border-0"> <a href="{{url('/videos')}}/{{$item->id}}"> <img class="card-img-top" src="{{asset('/storage')}}/{{$item->image}}" alt=""> </a>
                  <div class="card-body">
                    <h6 class=""> {{$item->lead}} </h6>
                    <h5 class="card-title"><a href="{{url('/videos')}}/{{$item->id}}">{{$item->title}}</a></h5>
                    <p class="card-text">{{$item->excerpt}}</p>
                    <small class="text-muted"><i class="fas fa-calendar-alt mr-1 "></i>{{$item->created_at->format('d F Y')}} </small> <a class="more-news" href="{{url('/noticias')}}/{{$item->id}}">Ver más..</a> </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
            <div class="col-md-12 text-center mt-3"> <a href="{{url('/videos')}}" class="btn-outline-boca" id="loadMore">Más Videos</a> </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection