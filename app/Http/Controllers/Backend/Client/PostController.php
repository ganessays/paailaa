<?php

namespace App\Http\Controllers\Backend\Client;

use App\Client;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
   public function create(){
       $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
       $title = 'Create New Post';
       return view('backend.client.pages.post.create',compact('title','client'));
   }

    public function store(Request $request){
        $this->validate($request,[
            'title'=> 'required',
        ]);
        $client=Client::where('user_id',Auth::user()->id)->firstOrFail();
        $post = new Post();
        $post->user_id =$client->id;
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

            request()->file('image')->move('public/frontend/images/uploads/client/post/image', $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect('client/list-post')->with('success','New Post Create');
    }

    public function list(){
       $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
       $postData = Post::where('user_id',$client->id)->get();
       $title = 'list of Post';
       return view('backend.client.pages.post.list',compact('title','postData','client'));
    }
    public function edit($id){
       $title ='Edit Post';
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
       $post = Post::findOrFail($id);
       return view('backend.client.pages.post.edit',compact('title','post','client'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=> 'required',
        ]);
        $client=Client::where('user_id',Auth::user()->id)->firstOrFail();
        $post = Post::findorFail($id);
        $post->user_id = $client->id;
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->detail =$request->detail;
        $post->start_at = $request->start_at;
        $post->end_at = $request->end_at;
        $post->status = $request->status;
        $post->type = $request->type;
        if ($request->hasFile('image')) {
            if (is_file(public_path('frontend/images/uploads/client/post/image').'/'.$post->image) && file_exists(public_path('frontend/images/uploads/client/post/image').'/'.$post->image)){
                unlink(public_path('frontend/images/uploads/client/post/image').'/'.$post->image);
            }
            $filename = time() . '.' . request()->file('image')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/frontend/images/uploads/client/post/image', $filename);
            $post->image = $filename;
        }
        $post->save();
        $post->save();
        return redirect('client/list-post')->with('success','New Post Update');

    }
    public function delete($id){
        $articles = Post::findOrFail($id);
        if ($articles->user_id == Auth::user()->id){
            if (is_file(public_path('frontend/images/uploads/client/post/image').'/'.$articles->image) && file_exists(public_path('frontend/images/uploads/client/post/image/').'/'.$articles->image)){
                unlink(public_path('frontend/images/uploads/client/post/image').'/'.$articles->image);
            }
            $articles->delete();

            return redirect('client/list-post')->with('success','Article Deleted Successfully !');
        }
        else{
            $articles->delete();
            return redirect('client/list-post');
        }
    }
}
