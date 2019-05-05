<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\TechPostsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\TechPost;
use App\TechCategory;
// use App\Photo;

class TechPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $techPosts = TechPost::all();
        return view('admin.techPosts.index', compact('techPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //for laravelhtmlCollective 
        // $techCategories = TechCategory::pluck('title','id')->all();

        //for html form
        $techCategories = TechCategory::all();
        return view('admin.techPosts.createhtml', compact('techCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validate inputs frm the create mtd
         $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required',
            'tech_category_id' => 'required',
            'photo' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('photo')){//if image is posted
            //get a filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();//tis wil get any xyz.jpeg uploaded

            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            //get just extension
            $extension = $request->file('photo')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;//even whn sm1 uploads files of same names, the timing wil create differences. Thus notin wl b overwritten
            
            //upload the image
            $path = $request->file('photo')->storeAs('public/imagesFolder', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';//if no image is deliberately selectd, use this deafault image
        }
        
        // Create new Post
        $techPost = new TechPost;
        $techPost->title = $request->input('title');//getting the typed inputs by user
        $techPost->content = $request->input('content');
        $techPost->tags = $request->input('tags');
        $techPost->tech_category_id = $request->input('tech_category_id');
        // $techPost->user_id = auth()->user()->id;
        $techPost->photo = $fileNameToStore;//so either non-empty or empty image wil be taken
        $techPost->save();

        return redirect('/admin/techPosts/index')->with('success', 'Post Created SUCCESSFULLY');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $techPost = TechPost::find($id);

        //grabbin particular_id to use in our whereClause below
        $techCategoryId = $techPost->tech_category_id;

        // dd($techCategoryId);

        //Check for correct user
        // if(auth()->user()->id !==$post->user_id) {
        //     return redirect('/posts')->with('error', 'Unauthorized Page');
        // }

        $techCategories = TechCategory::where('id', '!=', $techCategoryId)->get();
        // $techCategories = TechCategory::all();

        // dd($techCategories);

        return view('admin.techPosts.edit', compact('techPost', 'techCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         //copied frm store method
         $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required',
            'tech_category_id' => 'required',
            'photo' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('photo')){//if image is posted
            //get a filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();//tis wil get any xyz.jpeg uploaded

            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            //get just extension
            $extension = $request->file('photo')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;//even whn sm1 uploads files of same names, the timing wil create differences. Thus notin wl b overwritten
            
            //upload the image
            $path = $request->file('photo')->storeAs('public/imagesFolder', $fileNameToStore);
        }
        
        // Instead of creating a new Post, here we find the post
        $techPost = TechPost::find($id);
        $techPost->title = $request->input('title');
        $techPost->content = $request->input('content');
        $techPost->tags = $request->input('tags');
        $techPost->tech_category_id = $request->input('tech_category_id');

        //so dat the inherent image can be fully changed
        if($request->hasFile('photo')){
            $techPost->photo = $fileNameToStore;
        }

        $techPost->save();

        return redirect('/admin/techPosts/index')->with('success', 'Post EDITED SUCCESSFULLY');
    }


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // Cart::remove($id);
        // return back()->with('success', 'Item deleted successfully');


        $techPost = TechPost::find($id);

        //Check for correct user
        // if(auth()->user()->id !==$post->user_id) {
        //     return redirect('/posts')->with('error', 'Unauthorized Page');
        // }

        if($techPost->photo !== 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/imagesFolder/'.$techPost->photo);
        }

        $techPost->delete(); 

        return redirect('/admin/techPosts/index')->with('success', 'Post DELETED SUCCESSFULLY');
    



    }




}
