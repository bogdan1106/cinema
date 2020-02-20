<?php
/**
 * Created by PhpStorm.
 * User: Barbaros
 * Date: 20.02.2020
 * Time: 12:13
 */

namespace App\Traits;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

trait UploadImage
{
    public function getImage()
    {
        if(Storage::disk(self::IMAGE_STORAGE_NAME)->exists($this->image))
        {
            return Storage::disk(self::IMAGE_STORAGE_NAME)->url($this->image);
        }
    }


    public function uploadImage($image)
    {
        if ($image == null) return ;

        $this->deleteOldImage();

        // save the  picture  file
        $imageName = Storage::disk(self::IMAGE_STORAGE_NAME)->put('', $image);
        $this->resizeImage($imageName);

        // save the image file name in db
        $this->image = $imageName;
        $this->save();

    }


    public function resizeImage($imageName)
    {
        //resize poster and change quality
        $imagePath = Storage::disk(self::IMAGE_STORAGE_NAME)->path($imageName);
        $img = Image::make($imagePath)->resize(250, 300)
            ->save($imagePath, 90);
    }


    public function deleteOldImage()
    {
        // Check the old image file on disk and delete if it exist
        if ($this->image != null && Storage::disk('posters')->exists( $this->image))
        {
            Storage::disk(self::IMAGE_STORAGE_NAME)->delete($this->image);
        }
    }

}