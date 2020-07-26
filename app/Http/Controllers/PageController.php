<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Video;
use App\Perfilesxeneize;
use App\Sport;
use App\Momento;

class PageController extends Controller
{
    public function index(){
        $news = News::all();
        $videos = Video::all();
        $perfilesxeneizes = Perfilesxeneize::all();
        $sports = Sport::all();
        $momentos = Momento::all();
        return view('welcome')->withNews($news)->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes)->withSports($sports)->withMomentos($momentos);
    }

    public function newsarchive(){
        $news = News::paginate(20);
        $videos = Video::paginate(20);
        $perfilesxeneizes = Perfilesxeneize::all();
        return view('archive')->withNews($news)->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes);
    }
    public function parchive(){
        $news = News::paginate(20);
        $videos = Video::paginate(20);
        $perfilesxeneizes = Perfilesxeneize::paginate(20);
        return view('archivep')->withNews($news)->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes);
    }

    public function singlenews($slug){
        $news = News::where('slug', $slug)

        ->first();
        $newses = News::paginate(20);

        return view('newssingle')->withNews($news)->withNewses($newses);
    }
    public function singlepref($id){
        $news = Perfilesxeneize::find($id);
        $newses = Perfilesxeneize::paginate(20);

        return view('presingle')->withNews($news)->withNewses($newses);
    }
    public function singlesport($id){
        $news = Sport::find($id);
        $newses = Sport::paginate(20);

        return view('sposingle')->withNews($news)->withNewses($newses);
    }
}
