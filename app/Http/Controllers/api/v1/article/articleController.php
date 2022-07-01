<?php

namespace App\Http\Controllers\api\v1\article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Validator;


class articleController extends Controller
{
    public function index(Request $request){

        $articles = Article::latest()->paginate(10);


        if(!$articles){
            return response()->json([
                'success' => false,
                'message'=>'No articles have been posted yet'
            ],400);
        }

        return response()->json([
            'success' => true,
            'data' => $articles,   
        ], 200);
    }

    public function show($id){

        $article = Article::where('id',$id)->get();

        // return $article;

        if(!$article){
            return response()->json([
                'success' => false,
                'data' => 'Articles with id ' . $id . ' not found',   
            ],400);
        }

        return response()->json([
            'success' => true,
            'data' => $article
        ], 200);
    }

    public function store(Request $request){

        $data = [
            'title' => 'required|max:255|min:3',
            'content' => 'required|string|min:10',
            'image' => 'required|mimes:jpg,bmp,png,jpeg,webp,jfif',
            'user_id' => 'required',
            'category_id' => 'required'
        ];


        $validasi = Validator::make($request->all(), $data);

  
        if ($validasi->fails()) {
            
            $val = $validasi->errors()->all();
            return response()->json([
                'success' => false,
                'message' => $val
            ], 400);

        }else{

            $validData = $request->all();

            if($request->file('image')){
               $validData['image'] = $request->file('image')->store('post-images');
            }

            $articles = Article::create( $validData);
    
            return response()->json([
                'success' => true,
                'data' => $articles,   
            ], 200);
        }   

        return response()->json([
            'success' => false,
            'message'=>'Article failed to upload'
        ],400);
    }


    public function update(Request $request, $id){

        $data = [
            'title' => 'required|max:255|min:3',
            'content' => 'required|string|min:10',
            'image' => 'required|mimes:jpg,bmp,png,jpeg,webp,jfif',
            'user_id' => 'required',
            'category_id' => 'required'
        ];


        $validasi = Validator::make($request->all(), $data);

  
        if ($validasi->fails()) {
            
            $val = $validasi->errors()->all();
            return response()->json([
                'success' => false,
                'message' => $val
            ], 400);

        }else{

            $validData = $request->all();

            if($request->file('image')){
               $validData['image'] = $request->file('image')->store('post-images');
            }

            // return $validData;


            $articles = Article::where('id',$id)->update($validData);

            // return $articles;
    
            return response()->json([
                'success' => true,
                'data'=> Article::where('id',$id)->get(),   
            ], 200);
        }   

        return response()->json([
            'success' => false,
            'message'=>'Article failed to edit'
        ],400);

    }

    public function destroy($id){

        $data = Article::where('id',$id)->get();

        // return $data;

        if($data->count() > 0){
            Article::destroy($data);

            return response()->json([
                'success' => true,
                'message'=>'Article deleted successfully'
            ], 200);
        }else{
            return response()->json([
                'success' => true,
                'message'=>'article not found'
            ], 500);
        }

       
    }

 
}
