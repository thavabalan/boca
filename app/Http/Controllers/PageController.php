<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Video;
use App\Perfilesxeneize;
use App\Sport;
use App\Momento;
use Twitter;
use File;


class PageController extends Controller
{
    public function index(){
        $news = News::all();
        $videos = Video::all();
        $perfilesxeneizes = Perfilesxeneize::all();
        $sports = Sport::all();
        $momentos = Momento::all();
        $twittes = Twitter::getUserTimeline(['count' => 10, 'format' => 'array']);
        return view('welcome')->withNews($news)->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes)->withSports($sports)->withMomentos($momentos)->withTwittes($twittes);
    }

    public function newsarchive(){
        $news = News::paginate(20);
        $videos = Video::paginate(20);
        $twittes = Twitter::getUserTimeline(['count' => 10, 'format' => 'array']);

        $perfilesxeneizes = Perfilesxeneize::all();
        return view('archive')->withNews($news)->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes)->withTwittes($twittes);
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
    public function singlepref($slug){
        $news = Perfilesxeneize::where('slug', $slug)->first();
        $newses = Perfilesxeneize::paginate(20);

        return view('presingle')->withNews($news)->withNewses($newses);
    }
    public function singlesport($id){
        $sport = Sport::find($id);
        $newses = News::paginate(20);
        $videos = Video::paginate(20);
        return view('sposingle')->withSport($sport)->withNewses($newses)->withVideos($videos);
    }
}
