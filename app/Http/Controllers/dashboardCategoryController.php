<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Auth;

class dashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Categories::latest()->where('user_id',Auth::user()->id)->filter(request(['search']))->paginate(10)->withQueryString();
        
        return view('dashboard.Category.category',[
            'title' => 'My Category',
            'category' => $category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.category-create',[
            'title' => "Create Category",
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
            'name' => 'required|max:50',
            'user_id' => 'required',
           ];
    
           $data = $request->validate($validation);
    
           Categories::create($data);
    
           return redirect('/dashboard/category')->with('success','New category has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        return view('dashboard.category.category-update',[
            'title' => "Update Categories",
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {
        $validation = [
            'name' => 'required|max:50',
            'user_id' => 'required',
           ];
    
           $data = $request->validate($validation);
    
           Categories::where('id',$category->id)->update($data);
    
           return redirect('/dashboard/category')->with('success','Category has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        Categories::destroy($category->id);
        return redirect('/dashboard/category')->with('success','Category has been successfully deleted');
    }
}
