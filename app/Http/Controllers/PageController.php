<?php

namespace App\Http\Controllers;

use App\Pages;

class PageController extends Controller
{
    public function showPage($slug = 'main') {
        $page = Pages::findFirstBySlug($slug);
        if($page) {
            return view('welcome', ['page' => $page]);
        } else {
            dump(Pages::all());
            return abort(404);
        }
    }
}
