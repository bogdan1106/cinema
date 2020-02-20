<?php

namespace App\Http\Controllers;

use App\Mail\VerifyRegistration;
use App\Picture;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function single($slug)
    {
        $picture = Picture::where('slug', $slug)->first();
        return view('pages.single', compact('picture'));
    }


    public function test()
    {
        return view('pages.test');
    }


    public function news()
    {
        return view('pages.news');
    }


}
