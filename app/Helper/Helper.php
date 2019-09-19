<?php


namespace App\Helper;


use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function upload($file, $dest)
    {
        $path = time() . $file->getClientOriginalName();
        $file->move('$dest', $path);
        return $path;
    }
    public static function unlinkFiles($path) {
        unlink(public_path() . '/' . $path);
    }

    public static function currentUser () {
        return Auth::user();
    }
}
