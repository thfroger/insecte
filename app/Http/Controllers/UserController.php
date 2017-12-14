<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UsersController extends Controller
{
    public function create()
    {
        return view('infos');
    }
 
    public function store(Request $request)
    {
        return 'Le nom est ' . $request->input('nom');
    }
    
    public function view($id){
        $post = Post::where('id', $id)->firstOrFail();
        $post = Post::where('name', $name)->firstOrFail();
        $post = Post::where('age', $age)->firstOrFail();
        $post = Post::where('famille', $famille)->firstOrFail();
        $post = Post::where('race', $race)->firstOrFail();
        $post = Post::where('nourriture', $nouriture)->firstOrFail();
        $post = Post::where('email', $email)->firstOrFail();
        $post = Post::where('password', $password)->firstOrFail();
        $post = Post::where('remember_token', $remember_token)->firstOrFail();
        return view('Users', compact('post'));
    }

}