<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Genre;
use App\Mail\VerifyRegistration;
use App\Picture;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Factory;

class MainController extends Controller
{
    public function index()
    {
        $randomPicture = Picture::getRandomPicture();
        $recentPictures  = Picture::getResentPictures();
        $newPictures = Picture::getNewPictures();
        $popularPictures = Picture::getPopularPictures();
        $bestCartoons = Picture::getBestCartoons();
        $recentMovies = Picture::getResentMovies();

        return view('pages.index',compact('recentPictures', 'bestCartoons',
            'newPictures', 'popularPictures', 'recentMovies', 'randomPicture'));
    }

    public function single($slug)
    {
        $bestPictures = Picture::getPopularPictures();
        $randomPicture = Picture::getRandomPicture();
        $picture = Picture::where('slug', $slug)->first();

        return view('pages.single', compact('picture', 'randomPicture', 'bestPictures'));
    }

    public function watch($slug)
    {
        $picture = Picture::where('slug', $slug)->first();

        return view('pages.watch', compact('picture'));
    }


    public function test()
    {
        return view('pages.test');
    }


    public function news()
    {
        return view('pages.news');
    }

    public function editUser()
    {
        if (Auth::guest()) return redirect('/');
        $user = Auth::user();
        return view('pages.user_edit', compact('user'));
    }

    public function search(Request $request)
    {
      $pictures =  Picture::search($request->search);
        return view('pages.search', compact('pictures'));
    }


    public function genre($genre)
    {
        $genre =  Genre::where('slug', $genre)->firstOrFail();
        $pictures = $genre->pictures()->paginate(1);
        return view('pages.genre', compact('genre', 'pictures'));
    }


}
