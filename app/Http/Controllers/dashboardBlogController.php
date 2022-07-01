<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categories;
use Illuminate\Http\Request;
use Storage;
use Auth;

class dashboardBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Article::latest()->where('user_id',Auth::user()->id)->filter(request(['search']))->paginate(5)->withQueryString();

        return view('dashboard.blog.mypost',[
            'title' => 'My post',
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.mypost-create',[
            'title' => "Create Post",
            'cat' => Categories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validation = [
        'title' => 'required|min:10|max:255',
        'category_id' => 'required',
        'user_id' => 'required',
        'image' => 'required|mimes:jpg,bmp,png,jpeg,webp,jfif',
        'content' => 'required|min:30'
       ];

       $data = $request->validate($validation);

       if($request->file('image')){
            $data['image'] = $request->file('image')->store('post-images');
        }

       Article::create($data);

       return redirect('/dashboard/blogs')->with('success','New post has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $blog)
    {
        return view('dashboard.blog.mypost-detail',[
            'title' => "Detail Post",
            'post' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $blog)
    {
       
        return view('dashboard.blog.mypost-update',[
            'title' => "Update Post",
            'post' => $blog,
            'cat' => Categories::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $blog)
    {
        $validation = [
            'title' => 'required|min:10|max:255',
            'category_id' => 'required',
            'user_id' => 'required',
            'image' => 'nullable',
            'oldImage' => 'nullable',
            'content' => 'required|min:30'
           ];
    
           $data = $request->validate($validation);
    
           if($request->file('image')){

                if($request->oldImage){
                    Storage::delete($request->oldImage);
                }

                $data['image'] = $request->file('image')->store('post-images');
            }

            // return $article->id;
            // return $data;
    
           Article::where('id',$blog->id)->update($data);
    
           return redirect('/dashboard/blogs')->with('success','New post has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Article $blog)
    {   
        if($blog->image){
            Storage::delete($blog->image);
        }
        Article::destroy($blog->id);
        return redirect('/dashboard/blogs')->with('success','New post has been successfully deleted');
    }
}
