<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    protected $fillable = ['text'];

    public function picture()
    {
        return $this->belongsTo(Picture::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function add($request)
    {
        $comment = new self;
        $comment->text = $request->text;
        $comment->picture_id = $request->picture_id;
        $comment->user_id = $request->user_id;
        $comment->is_clear = 1;
        $comment->is_admin = 0;

        $comment->save();
    }

        public function edit($request)
    {
        $this->text = $request->text;
        $this->isClear($request->is_clear);
        $this->save();

    }

    public function isClear($value)
    {
        if ($value == 'on') $this->is_clear = 1;
        else $this->is_clear = 0;
        $this->save();
    }

    protected function isAdmin()
    {
        if( Auth::user()->is_admin = 1)
        {
            $this->is_admin = 1;
            $this->save();
        }
    }


}
