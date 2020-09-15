<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Video;
use App\Perfilesxeneize;
use App\Sport;
use App\Momento;
use App\Player;
use App\Team;
use Twitter;
use File;


class PageController extends Controller
{
    public function index(){
        $news = News::all();
        $videos = Video::all();
        $perfilesxeneizes = Perfilesxeneize::all();
        $sports = Sport::orderBy('title')->get();
        $momentos = Momento::all();
        $twittes = Twitter::getListStatuses(['list_id' => '1296500355958743045', 'count' => 10, 'format' => 'array', 'include_rts'=> false]);
        return view('welcome')->withNews($news)->withVideos($videos)->withPerfilesxeneizes($perfilesxeneizes)->withSports($sports)->withMomentos($momentos)->withTwittes($twittes);
    }

    public function newsarchive(){
        $news = News::latest()->paginate(12);
        $videos = Video::latest()->paginate(20);
        $twittes = Twitter::getListStatuses(['list_id' => '1296500355958743045', 'count' => 10, 'format' => 'array', 'include_rts'=> false]);
        $sports = Sport::orderBy('title')->get();
        $perfilesxeneizes = Perfilesxeneize::all();
        return view('archive')->withNews($news)->withVideos($videos)->withSports($sports)->withPerfilesxeneizes($perfilesxeneizes)->withTwittes($twittes);
    }
    public function parchive(){
        $news = News::latest()->paginate(20);
        $videos = Video::latest()->paginate(20);
        $perfilesxeneizes = Perfilesxeneize::latest()->paginate(12);
        $sports = Sport::orderBy('title')->get();
        $twittes = Twitter::getListStatuses(['list_id' => '1296500355958743045', 'count' => 10, 'format' => 'array', 'include_rts'=> false]);
        return view('archivep')->withNews($news)->withVideos($videos)->withSports($sports)->withPerfilesxeneizes($perfilesxeneizes)->withTwittes($twittes);
    }
    public function videoarchive(){
        $videos = Video::latest()->paginate(20);
        $twittes = Twitter::getListStatuses(['list_id' => '1296500355958743045', 'count' => 10, 'format' => 'array', 'include_rts'=> false]);
        $perfilesxeneizes = Perfilesxeneize::all();
        $sports = Sport::orderBy('title')->get();
        return view('archivev')->withVideos($videos)->withSports($sports)->withPerfilesxeneizes($perfilesxeneizes)->withTwittes($twittes);
    }
    public function singlenews($slug){
        $news = News::where('slug', $slug)

        ->first();
        $newses = News::latest()->paginate(20);
        $sports = Sport::orderBy('title')->get();
        return view('newssingle')->withNews($news)->withNewses($newses)->withSports($sports);
    }
    public function singlepref($slug){
        $news = Perfilesxeneize::where('slug', $slug)->first();
        $newses = Perfilesxeneize::paginate(20);
        $sports = Sport::orderBy('title')->get();
        return view('presingle')->withNews($news)->withNewses($newses)->withSports($sports);
    }
    public function plantelsingle($slug){
        
        $team = Team::where('slug', $slug)->first();
        $players = Player::where('team', $team->id)->orderBy('number')->get();
        $sports = Sport::orderBy('title')->get();

        return view('plantelsingle')->withPlayers($players)->withTeam($team)->withSports($sports);
    }
    public function deportistasingle($plantelSlug,$deportistaSlug){
        
        $team = Team::where('slug', $plantelSlug)->first();
        $player = Player::where('team', $team->id)->where('slug', $deportistaSlug)->first();
        $sports = Sport::orderBy('title')->get();

        return view('playersingle')->withPlayer($player)->withTeam($team)->withSports($sports);
    }
    public function singlesport($id){
        $sport = Sport::find($id);
        $newses = News::latest()->paginate(20);
        $videos = Video::latest()->paginate(20);
        $sports = Sport::orderBy('title')->get();
        return view('sposingle')->withSport($sport)->withNewses($newses)->withVideos($videos)->withSports($sports);
    }
    public function singlevideo($id){
        $video = Video::latest()->find($id);
        $videos = Video::latest()->paginate(20);
        $sports = Sport::orderBy('title')->get();
        return view('videosingle')->withVideo($video)->withVideos($videos)->withSports($sports);
    }
}
