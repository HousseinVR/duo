<?php

namespace App\Http\Controllers;

use App\Models\Portefolio;
use Illuminate\Http\Request;

class PorteFolioController extends Controller
{
    public function index () {
        return view('admin.portefolio');
    }
    public function create () {
        return view('admin.portefolio')  ;
    }
    public function store (Request $request) {
        $table = new Portefolio ;
        $table->titre=$request->titre ;
        $table->description=$request->description;
        $table->save() ;
        return redirect()->route('home') ;
    }
}

