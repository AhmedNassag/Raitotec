<?php

namespace App\Traits;

Trait ImageTrait
{
    function uploadImage($photo, $folder)
    {
        $file_extension = $photo->getClientOriginalExtension();
        $photo_name     = time() . rand(1,1000) . '.'.$file_extension;
        $path           = 'public/'.$folder;
        $photo->move($path, $photo_name);

        return $photo_name;
    }
}