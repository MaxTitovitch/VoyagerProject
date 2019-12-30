<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Pages;

class PageController extends Controller
{
    public function showPage($slug = 'main') {
        $page = Pages::findFirstBySlug($slug);
        if($page) {
            return view('welcome', ['page' => $page]);
        } else {
            return abort(404);
        }
    }
}
