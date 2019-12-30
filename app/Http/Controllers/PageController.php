<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Pages;

class PageController extends Controller
{
    public function show($slug = 'main') {
        $page = Pages::findBySlug($slug);
        if($page) {
            return view('welcome', ['page' => $page]);
        } else {
            return abort(404);
        }
    }
}
