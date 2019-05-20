<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Post;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(){
        $title = 'Create New Post | Paailaa';
        return view('backend.superadmin.news_articles.post.create',compact('title'));
    }

    public function store(Request $request){
        $this->validate($request,[
           'title'=> 'required|unique:posts,title',
        ]);

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->detail =$request->detail;
        $post->start_at = $request->start_at;
        $post->end_at = $request->end_at;
        $post->status = $request->status;
        $post->type = $request->type;
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->file('image')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/frontend/images/uploads/post/image', $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect('superadmin/list-post')->with('success','New Post Create');


    }
    public function list(){
        $title = 'Post List | Paailaa';
        $postData = Post::all();
        return view('backend.superadmin.news_articles.post.list',compact('postData','title'));
    }

    public function edit($id){
        $title = 'Edit Post';
        $post = Post::findOrFail($id);
        return view('backend.superadmin.news_articles.post.edit',compact('title','post'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=> 'required',
        ]);
        $post = Post::findorFail($id);
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->detail =$request->detail;
        $post->start_at = $request->start_at;
        $post->end_at = $request->end_at;
        $post->status = $request->status;
        $post->type = $request->type;
        if ($request->hasFile('image')) {
            if (is_file(public_path('frontend/images/uploads/post/images').'/'.$post->image) && file_exists(public_path('frontend/images/uploads/post/images').'/'.$post->image)){
                unlink(public_path('frontend/images/uploads/post/images').'/'.$post->image);
            }

            $filename = time() . '.' . request()->file('image')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/frontend/images/uploads/post/images', $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect('superadmin/list-post')->with('success','New Post Update');

    }

}
