<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug) {
        $page = Page::findBySlug($slug);
        return view('theme::pages.show', ['page'=>$page]);
    }

    public function gallery(){
        return view('theme::gallery.show');
    }
}
