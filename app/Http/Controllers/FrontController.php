<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        return view('welcome');
    }
    public function portefolio () {
        $table = Portfolio::all();

        return view('pages.portefolio',compact('table'));
    }
     public function contact () {
        return view('pages.contact');
    }
     public function blog () {
        return view('pages.blog');
    }
    public function dashboard () {
        // return view('admin.dashboard');
        return view('admin.blog_modif');
    }
}
