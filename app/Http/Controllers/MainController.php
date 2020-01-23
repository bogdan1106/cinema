<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $recentPictures  = Picture::getResentPictures();
        return view('pages.index',compact('recentPictures'));
    }

    public function test()
    {
        return view('pages.layout');
    }
}
