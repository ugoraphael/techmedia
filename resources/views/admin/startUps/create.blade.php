@extends('layout.adminLayout')

@section('content')

    <h1>ADMIN Start Ups</h1>


  
    <form action="{{ route('admin.startUps.store') }}" method="POST" enctype="multipart/form-data" id="make_request">
        @csrf

        <div class="row">
           
            <div class="col-md-6 col-md-offset-3">

                <input type="text" name="title" placeholder="Post title" id="post_title">
                
                <input type="file" name="photo" id="post_image">

                
                    <select name="startUp_category_id" id="">
                
                        @foreach($startupCategories as $startupCategory)  

                            echo "<option value='<?php echo $startupCategory->id; ?>'><?php echo $startupCategory->title; ?></option>";

                        @endforeach
                  
                    </select>

                 <input type="text" name="tags" placeholder="Post Tags" id="techPost_title">


                <textarea name="content" id="post_content" placeholder="Describe your contents here"></textarea>

            </div>
          

        </div>
        
        <input type="submit" value="Send" class="pull-right">
    </form>



@endsection