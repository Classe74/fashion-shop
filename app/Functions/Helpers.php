<?php
namespace App\Functions;
use Illuminate\Support\Str;
class Helpers {
    public static function generateSlug($text)
    {
        return Str::slug($text, '-');
    }
}
