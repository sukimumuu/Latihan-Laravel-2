<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function crud(){
        $data_post = Post::all();
        return view('home.owner.crudpost', compact('data_post'));
    }
    public function create(Request $req){
        $data_post = Post::create($req->all());
        if($req->hasFile('picture')){
         $req->file('picture')->move('pict_product/', $req->file('picture')->getClientOriginalName());
         $data_post->picture = $req->file('picture')->getClientOriginalName();
         $data_post->save();
        }
        return redirect('/crud-post');
    }
    public function delete($id){
        $data_post = Post::find($id);
        $data_post->delete();
        return redirect('/crud-post');
    }
}
