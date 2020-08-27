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
        $sports = Sport::latest()->get();
        $momentos = Momento::all();
        $twittes = Twitter::getListStatuses(['list_id' => '1296500355958743045', 'count' => 10, 'format' => 'array', 'include_rts'=> false]);
        return view('welcome')->withNews($news)->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes)->withSports($sports)->withMomentos($momentos)->withTwittes($twittes);
    }

    public function newsarchive(){
        $news = News::latest()->paginate(12);
        $videos = Video::latest()->paginate(20);
        $twittes = Twitter::getListStatuses(['list_id' => '1296500355958743045', 'count' => 10, 'format' => 'array', 'include_rts'=> false]);

        $perfilesxeneizes = Perfilesxeneize::all();
        return view('archive')->withNews($news)->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes)->withTwittes($twittes);
    }
    public function parchive(){
        $news = News::latest()->paginate(20);
        $videos = Video::latest()->paginate(20);
        $perfilesxeneizes = Perfilesxeneize::latest()->paginate(12);
        $twittes = Twitter::getListStatuses(['list_id' => '1296500355958743045', 'count' => 10, 'format' => 'array', 'include_rts'=> false]);
        return view('archivep')->withNews($news)->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes)->withTwittes($twittes);
    }
    public function videoarchive(){
        $videos = Video::latest()->paginate(20);
        $twittes = Twitter::getListStatuses(['list_id' => '1296500355958743045', 'count' => 10, 'format' => 'array', 'include_rts'=> false]);
        $perfilesxeneizes = Perfilesxeneize::all();
        return view('archivev')->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes)->withTwittes($twittes);
    }
    public function singlenews($slug){
        $news = News::where('slug', $slug)

        ->first();
        $newses = News::latest()->paginate(20);

        return view('newssingle')->withNews($news)->withNewses($newses);
    }
    public function singlepref($slug){
        $news = Perfilesxeneize::where('slug', $slug)->first();
        $newses = Perfilesxeneize::paginate(20);

        return view('presingle')->withNews($news)->withNewses($newses);
    }
    public function singlesport($id){
        $sport = Sport::find($id);
        $newses = News::latest()->paginate(20);
        $videos = Video::latest()->paginate(20);
        return view('sposingle')->withSport($sport)->withNewses($newses)->withVideos($videos);
    }
    public function singlevideo($id){
        $video = Video::latest()->find($id);
        $videos = Video::latest()->paginate(20);

        return view('videosingle')->withVideo($video)->withVideos($videos);
    }
}
