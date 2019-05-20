<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Category;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create(){
        $category =Category::all();
        return view('backend.superadmin.news_articles.category.create',compact('category'));
    }

    public function store(Request $request){
        $this->validate($request,[
           'name'=>'required|unique:categories,name',
        ]);
        $category = New Category();
        $category->name = $request->name;
        $category->slug =str_slug($request->name);
        $category->description = $request->description;
        $category->save();
        return redirect('superadmin/add-category')->with('success',' New Category add');
    }

    public function edit($id){
        $title = 'Edit Category | Paailaa';
        $category = Category::findOrFail($id);
        return view('backend.superadmin.news_articles.category.edit',compact('category','title'));

    }
    public function update(Request $request,$id){
        $this->validate($request,[
           'name'=> 'required|unique:categories,name'
        ]);
        $category =Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug =str_slug($request->name);
        $category->description = $request->description;
        $category->save();
        return redirect('superadmin/add-category')->with('success',' New Category Update');

    }
}
