@extends('layout.adminLayout')

@section('content')
    {{--  Display errors where neccessary --}}
    {{-- @include('inc.message') --}}

    <h1>Create Posts</h1>

   
    {!! Form::open(['action' => 'TechPostsController@store', 'method' => 'Post', 'files' => true, 'id' => 'make_request']) !!}

    <div class="row">
           
            <div class="col-md-6 col-md-offset-3">
    
        {!! Form::text('title', '', ['placeholder' => 'Title']) !!}
    

   
       
        {!! Form::select('tech_category_id', ['' => 'Choose options'] + $techCategories, '' ) !!}
    
        {!! Form::text('tags', '', ['placeholder' => 'Tags']) !!}

    {{-- Adding files --}}
    
        {{-- {!! Form::file('photo', null, ['class' => 'form-control']) !!} --}}
        {!! Form::file('photo') !!}
    

    
        {!! Form::textarea('content', '', ['placeholder' => 'Body Text']) !!}
   


    {{Form::submit('Create Post')}}

            </div>
        </div>
    {!! Form::close() !!}



@endsection