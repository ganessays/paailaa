<?php

namespace App\Http\Controllers\Backend\Client;

use App\Client;
use App\ClientGallery;
use App\ClientGalleryCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index(){
        $title='Galleries | Client-Area | Paailaa';
        $client=Client::where('user_id',Auth::user()->id)->firstOrFail();
        $galleries = ClientGallery::where('client_id',Auth::user()->client->id)->orderBy('id','DESC')->get();
        $categories = ClientGalleryCategory::where('client_id',Auth::user()->client->id)->orderBy('name','ASC')->get();
        return view('backend.client.pages.gallery.create',compact('title','galleries','categories','client'));
    }
    public function store(Request $request){
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            foreach($files as $file){
                $clientGallery = new ClientGallery();
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $FileGallery = str_random(5)."-".date('his')."-".str_random(3);
                $fileName= md5($FileGallery).".".$extension;
                $destinationPath = 'public/uploads/gallery'.'/';
                $file->move($destinationPath, $fileName);
                $clientGallery->client_id = Auth::user()->client->id;
                $clientGallery->cat_id = $request->cat_id;
                $clientGallery->image = $fileName;
                $clientGallery->save();
            }
        }
        return redirect()->back()->with('success','Gallery Created Successfully');
    }
    public function delete($id){
        $gallery = ClientGallery::findOrFail($id);
        if (is_file(public_path('uploads/gallery/').'/'.$gallery->file) && file_exists(public_path('uploads/gallery/').'/'.$gallery->file)){
            unlink(public_path('uploads/gallery/').'/'.$gallery->file);
        }
        $gallery->delete();
        return redirect()->back()->with('success','Gallery Deleted');

    }

    public function add_gallery_cat(Request $request){
        $cat = New ClientGalleryCategory();
        $cat->name = $request->name;
        $cat->client_id = Auth::user()->client->id;
        $cat->save();
        return redirect('client/galleries')->with('success','Gallery Category Created');
    }
    public function edit_gallery_cat($id){
        $title='Edit Gallery Cat | Client-Area | Admission Nepal';
        $cat = ClientGalleryCategory::findOrFail($id);
        return view('client.galleries.edit_gallery_cat',compact('title','cat'));
    }
    public function update_gallery_cat(Request $request, $id){
        $cat = ClientGalleryCategory::findOrFail($id);
        $cat->name = $request->name;
        $cat->save();
        return redirect('client/galleries')->with('success','Gallery Category Updated');
    }
}
