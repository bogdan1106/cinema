<?php

namespace App;

use App\Mail\VerifyRegistration;
use App\Traits\UploadImage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable , UploadImage;

    protected const IMAGE_STORAGE_NAME = 'avatars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function create($attributes)
    {
        $user = new self;
        $user->name = $attributes->name;
        $user->email = $attributes->email;
        $user->password = Hash::make($attributes->password );
        $user->verify_token = rand(23554364326546, 23554364326546223);
        $user->save();

        Mail::to($user->email)->send( new VerifyRegistration( $user));
    }

    public function uploadAvatar($image)
    {

    }

    public function getAvatar()

    {
        return Storage::disk('avatars')->getAdapter()->getPathPrefix();

//        if(Storage::disk('videos')->exists($this->image))
//        {
//            return Storage::disk('videos')->url($this->image);
//        }
    }
}
