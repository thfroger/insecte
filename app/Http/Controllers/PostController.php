<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('pages/form');
    }

    public function store(Request $request){
        $request ->validate([
            'age' => 'required|number',
            'famille'=> 'required|string',
            'race' => 'required|string',
            'nourriture' => 'required|string'
        ]);

        echo "Données Valides";
    }

}
