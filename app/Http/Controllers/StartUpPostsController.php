<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\StartUp;
use App\StartUpCategory;

class StartUpPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $startUps = StartUp::all();
        return view('admin.startUps.index', compact('startUps'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         //for html form
         $startupCategories = StartUpCategory::all();
         return view('admin.startUps.create', compact('startupCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validate inputs frm the create mtd
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required',
            'startUp_category_id' => 'required',
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
            $fileNameToStore = 'noimage.jpg';//if no image is deliberately selectd, use this default image
        }
        
        // Create new Post
        $startup = new StartUp;

        //db object names       vs      input form names
        $startup->title                 = $request->input('title');//getting the typed inputs by user
        $startup->content               = $request->input('content');
        $startup->tags                  = $request->input('tags');
        $startup->start_up_category_id   = $request->input('startUp_category_id');
        // $techPost->user_id = auth()->user()->id;
        $startup->photo                = $fileNameToStore;//so either non-empty or empty image wil be taken
        $startup->save();

        return redirect('/admin/startUps/index')->with('success', 'Post Created SUCCESSFULLY');
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
        $startUp = StartUp::find($id);

        //grabbin particular_id to use in our whereClause below
        $startupCategoryId = $startUp->startUp_category_id;

        $startupCategories = StartUpCategory::where('id', '!=', $startupCategoryId)->get();

        return view('admin.startUps.edit', compact('startUp', 'startupCategories'));




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

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
            'startUp_category_id' => 'required',
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
        $startUp = StartUp::find($id);
        $startUp->title = $request->input('title');
        $startUp->content = $request->input('content');
        $startUp->tags = $request->input('tags');
        $startUp->start_up_category_id = $request->input('startUp_category_id');

        //so dat the inherent image can be fully changed
        if($request->hasFile('photo')){
            $startUp->photo = $fileNameToStore;
        }

        $startUp->save();

        return redirect('/admin/startUps/index')->with('success', 'Post EDITED SUCCESSFULLY');


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
        $startUp = StartUp::find($id);

        //Check for correct user
        // if(auth()->user()->id !==$post->user_id) {
        //     return redirect('/posts')->with('error', 'Unauthorized Page');
        // }

        if($startUp->photo !== 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/imagesFolder/'.$startUp->photo);
        }

        $startUp->delete(); 

        return redirect('/admin/startUps/index')->with('success', 'Post DELETED SUCCESSFULLY');
    }
}
