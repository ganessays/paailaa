<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Post;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index(){
        $tag = Tag::all();
        $title = 'Add Tag | Paailaa';
        return view('backend.superadmin.tag.index',compact('title','tag'));
    }
    public function store(Request $request){
        $this->validate($request,[
           'name' => 'required|unique:tags,name'
        ]);
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        return redirect('superadmin/add-tag');
    }
    public function edit($id){
        $tag = Tag::findOrFail($id);
        $title = 'edit tag | Paailaa';
        return view('backend.superadmin.tag.edit',compact('title','tag'));

    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|unique:tags,name'
        ]);
        $tag = Tag::findOrFail($id);
        $tag->name = $request->name;
        $tag->save();
        return redirect('superadmin/add-tag');

    }
}
