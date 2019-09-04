<?php


namespace App\Helper;


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
}
