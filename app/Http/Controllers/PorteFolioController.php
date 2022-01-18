<?php

namespace App\Http\Controllers;

use App\Models\Portefolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
        public function index()
        {
        //    $portfolios = Portfolio::all();
           return view("pages.portfolio",compact('portfolios'));

        }

        // return la page formulaire de portfolio
        public function create () {
            return view('admin.portefolio')  ;
        }

        public function store(Request $request)
        {
            // dd($request);
            $portfolio = new Portefolio();
            $portfolio->titre = $request->titre;
            $portfolio->description = $request->description;
            $portfolio->save();
    return redirect()-> route('portefolio.change') ;

        }
        public function destroy(Portefolio $id)
        {
            $id->delete();
            return redirect()->back();
        }
        public function show (Portefolio $id) {
            $table= $id ;
             return view('pages.portefolioshow', compact('table')) ;
    }
        public function edit (Portefolio $id) {
            $data=$id ;
            return view('admin.edit.portefolio_edit' , compact('data')) ;
        }

        public function update(Portefolio $portfolio, Request $request)
        {
            // dump($portfolio);
            // dd($request);
            $portfolio -> titre = $request->titre;
            $portfolio -> description = $request->description;
            $portfolio -> save();
            return redirect()->back();
        }
        public function affichage()
        {
            $affichePortfolio = Portefolio::all();
            // $portfoliosTotal = Portfolio::all();

            return view("admin.portfolio.affichage",compact("affichePortfolio"));
        }
}

