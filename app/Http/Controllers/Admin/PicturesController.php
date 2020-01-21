<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use App\Category;
use App\Director;
use App\Genre;
use App\Http\Controllers\Controller;
use App\Picture;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\ImageManagerStatic as Image;

class PicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::pluck('title', 'id')->all();
        $genres = Genre::pluck('title', 'id')->all();
        $pictures = Picture::all();

        return view('admin.pictures.index', compact('categories',
            'genres', 'pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actors = Actor::pluck('name', 'id');
        $directors = Director::pluck('name', 'id');
        $date = date("y-m-d");
        $categories = Category::pluck('title', 'id')->all();
        $genres = Genre::pluck('title', 'id')->all();

        return view('admin.pictures.create', compact('categories',
            'genres', 'date', 'actors', 'directors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation rules
        $request->validate([
            'title_ru' => 'required',
            'title_eng' => 'required',
            'category_id' => 'required',
            'year' => 'required',
            'budget' => 'required',
            'date' => 'required',
            'description' => 'required',
            'poster' => 'image',
        ]);

        //save all attributes
        $picture = Picture::add($request->all());
        $picture->setCategory($request->get('category_id'));
        $picture->setDirector($request->get('director_id'));
        $picture->setGenres($request->get('genres'));
        $picture->setActors($request->get('actors'));
        $picture->setPictureNew($request->get('is_new'));
        $picture->uploadImage($request->image);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $picture = Picture::find($id);
        $date = date("y-m-d");
        $categories = Category::pluck('title', 'id')->all();
        $genres = Genre::pluck('title', 'id')->all();

        return view('admin.pictures.edit',
            compact('picture','date', 'categories', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation rules
        $request->validate([
            'title_ru' => 'required',
            'title_eng' => 'required',
            'category_id' => 'required',
            'year' => 'required',
            'budget' => 'required',
            'date' => 'required',
            'description' => 'required',
            'poster' => 'image',
        ]);

        $picture = Picture::find($id);

        $picture->edit($request->all());
        $picture->setCategory($request->get('category_id'));
        $picture->setGenres($request->get('genres'));
        $picture->setPictureNew($request->get('is_new'));
        $picture->uploadImage($request->image);

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Picture::find($id)->delete();
        return back();
    }
}
