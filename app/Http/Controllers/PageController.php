<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Pages;

class PageController extends Controller
{
    public function show() {
        $pages = Pages::all();
        return view('welcome', ['pages' => compact('pages')]);
    }
}
