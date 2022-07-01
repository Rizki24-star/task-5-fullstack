<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categories;

class homeController extends Controller
{
    public function index(){

        $newpost = Article::all()->sortByDesc('updated_at')->first();
        $post =  Article::latest()->paginate(6);
        $category =  Categories::all();
        // return $newpost;

        return view('home',[
            'title' => 'Home',
            'new' => $newpost,
            'post' => $post,
            'category' => $category
        ]);
    }

    public function blogs(){
        $newpost = Article::all()->sortByDesc('updated_at')->first();
        $post =  Article::latest()->paginate(12);
        $category =  Categories::all();

        return view('home',[
            'title' => 'Home',
            'new' => $newpost,
            'post' => $post,
        ]);
    }

    public function blogDetail(){
        $newpost = Article::all()->sortByDesc('updated_at')->first();
        $post =  Article::latest()->paginate(6);
        $category =  Categories::all();

        return view('home',[
            'title' => 'Home',
            'new' => $newpost,
            'post' => $post,
            'category' => $category
        ]);
    }
}
