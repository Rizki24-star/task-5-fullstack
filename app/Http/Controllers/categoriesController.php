<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Article;
use App\Models\User;


class categoriesController extends Controller
{
    public function index(){

        $category =  Categories::all();

        return view('category',[
            'title' => 'Categories',
            'category' => $category
        ]);
    }

    public function listCategory(Categories $c){

        $post =  Article::where('category_id',$c->id)->get();

        return view('blog-category',[
            'title' => 'Categories',
            'cat' => $c->name,
            'post' => $post
        ]);
    }

    public function listAuthor(User $u){

        $post =  Article::where('user_id',$u->id)->get();

        return view('blog-author',[
            'title' => 'Categories',
            'cat' => $u->name,
            'post' => $post
        ]);
    }

    public function listSearch(Request $request){

        // $post =  Article::where('user_id',$u->id)->get();
        $post = Article::latest()->filter(request(['search']))->paginate(12)->withQueryString();

        return view('blog-search',[
            'title' => request('search'),
            'post' => $post
        ]);
    }
}
