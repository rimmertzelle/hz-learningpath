<?php

namespace App\Http\Controllers;

use App\Video;
// use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
      $videos = Video::all(); //Eloquent
      return view('videos.index', compact('videos'));
    }

    public function show(Video $video)
    {
      //$video = Video::find($id); //Eloquent
      return view('videos.show', compact('video'));
    }
}
