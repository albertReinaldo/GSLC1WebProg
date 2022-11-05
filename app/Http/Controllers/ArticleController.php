<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
       return view('home', compact('articles'));
    }

    public function addForm(){
        return view('article_add_form');
    }

    public function addLogic(Request $request){
        $request->validate([
            "content" => "required|min:20|max:10000",
            "image_url" => "required|max:100000"
        ]);

        // $fileObj = $request->file('iamge_url');
        // $name = $fileObj->getClientOriginalName(); //balikin nama asli dari gambarnya
        // $ext = $fileObj->getClientOriginalExtension(); //balikin extension seperti png or jpg
        // $new_filename = $name . time() . '.' . $ext;
        // $fileObj->storeAs('public/images', $new_filename);

        DB::table('articles')->insert([
            "content" => $request->content,
            "image_url" =>$request->image_url
        ]);

        return redirect()->route('article_index_view');
    }
}
