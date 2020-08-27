@extends('layout.main')
@section('content')

<main role="main">
	
	
	
    <section class="page-banner">
    @if ($news->cover_photo)
    <div class="banner-img banner-fade animated scaleOut" style="background-image: url('{{Voyager::image($news->cover_photo)}}');"></div>
    @else
    <div class="banner-img banner-fade animated scaleOut" style="background-image: url('{{Voyager::image($news->image)}}');"></div>
    @endif
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
            @isset($news->video)
            <div class="video-responsive">

            <iframe src="https://www.youtube.com/embed/{{$news->video}}" frameborder="0" allowfullscreen></iframe>
              </div>
            @endisset   
              {!!$news->body!!}
            </div>
          </div>
        </div>
      </div>
    </div>
      
      
      
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
              @foreach($newses as $item)
              <div class="col-md-4"> <a href="{{url('perfiles')}}/{{$item->slug}}">
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