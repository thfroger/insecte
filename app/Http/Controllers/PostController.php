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

    public function update($id, Request $request){
        $post = Post::where('id', $id)->firstOrFail(); /* trouve l'entrée en DB */
        $post->update($request->intersect(['age', 'famille', 'race','nourriture'])); /*récupère les valeurs suivantes */
        return redirect()->back(); /* redirige vers la vue d'édition */
     }
     
}
