<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categories;

class blogController extends Controller
{
    public function index(){
        $newpost = Article::all()->sortByDesc('updated_at')->first();
        $post =  Article::latest()->paginate(12);
        $category =  Categories::all();

        return view('blog',[
            'title' => 'Blogs',
            'new' => $newpost,
            'post' => $post,
        ]);
    }

    public function detail(Article $p){
        $detail = Article::where('id',$p->id)->first();
        $rpost = Article::where('category_id',$p->category_id)->whereNotIn('id',[$p->id])->get();
        $category =  Categories::all();

        return view('blog-detail',[
            'title' => 'Blogs',
            'post' => $detail,
            'rpost' => $rpost,
            'category' => $category
        ]);
    }
}
