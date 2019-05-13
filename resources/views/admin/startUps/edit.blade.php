@extends('layout.adminLayout')

@section('content')

    <h1>ADMIN TECH POSTS</h1>


  
     <form action="{{ route('admin.startUps.update', $startUp->id) }}" method="POST" enctype="multipart/form-data" id="make_request"> 
        @csrf


        <div class="row">
            <div class="col-sm-4">
                <img width='100' src="/storage/imagesFolder/{{$startUp->photo}}">
            </div>
            <div class="col-sm-8">
                    
            
                        <input type="text" name="title" placeholder="Post title" id="post_title" value="{{$startUp->title}}">
                            
                            <input type="file" name="photo" id="post_image">
            
                          

                                 
                                 <select name="startUp_category_id" id="">

                                   <option value="{{ $startUp->start_up_category->id }}"> {{ $startUp->start_up_category->title }} </option>
                
                                        @foreach($startupCategories as $startupCategory)  
                
                                            echo "<option value='<?php echo $startupCategory->id; ?>'><?php echo $startupCategory->title; ?></option>";
                
                                        @endforeach
                                  
                                    </select>

                               
            
                                <input type="text" name="tags" value="{{$startUp->tags}}" id="startUp_title">
            
            
                            <textarea name="content" id="post_content"><?php echo $startUp->content; ?></textarea>
            
           
        </div>
       
          

        </div>
        
        <input type="submit" value="Send" class="pull-right">
    </form>



@endsection