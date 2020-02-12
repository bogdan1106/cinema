<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $recentPictures  = Picture::getResentPictures();
        $newPictures = Picture::getNewPictures();
        $popularPictures = Picture::getPopularPictures();
        $bestCartoons = Picture::getBestCartoons();
        $recentMovies = Picture::getResentMovies();

        return view('pages.index',compact('recentPictures', 'bestCartoons',
            'newPictures', 'popularPictures', 'recentMovies'));
    }

    public function test()
    {
        return view('pages.single');
    }
}
