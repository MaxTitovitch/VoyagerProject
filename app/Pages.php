<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    public static function findFirstBySlug($slug) {
        return static::where('slug', $slug)->first();
    }
}
