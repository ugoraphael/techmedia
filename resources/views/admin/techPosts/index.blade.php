@extends('layout.adminLayout')

@section('content')

    <h1>ADMIN TECH POSTS</h1>

    <div class="add_user">
            <a href="{{route('admin.techPosts.create')}}">ADD POSTS</a>
    </div>
  
    <div class="table_section">
                    
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                     @foreach($techPosts as $techPost)
                        <tr>
                            <td><?php echo $techPost->id; ?></td>
                            <td><?php echo $techPost->title; ?>
                                
                             <div class="action_links">

                                <form accept-charset="UTF-8" action="{{route('admin.techPosts.destroy', $techPost->id)}}" method="POST" class="pull-right">
                                    @csrf
                                    <input id="delbtn" class="btn btn-danger confirm" onclick="deleteFunction()" type="submit" value="Delete">
                                    <input name="_method" type="hidden" value="DELETE">
                                </form>

                                {{-- the code above begets this in viewSource or inspectElement --}}
                                {{-- <form method="POST" action="http://lsapp.me/posts/1" accept-charset="UTF-8">
                                    <input name="_token" type="hidden" value="YGkYZzmhzO7gr2Mbr0Hd9cCs2tJjOpXHP1dnvES8"> 
                                    <input class="btn btn-danger confirm" data-confirm="Are you sure you want to delete?" type="submit" value="Delete">
                                    <input name="_method" type="hidden" value="DELETE">
                                 </form> --}}
                                        
                                {{-- <a href="{{route('admin.techPosts.destroy', $techPost->id)}}">Delete</a> --}}

                                <a href="{{route('admin.techPosts.edit', $techPost->id)}}">Edit</a>
                                <!-- <a href="../post.php?id=<?php //echo $post->id; ?>">View</a> -->

                            </div>

                            </td>

                            

                            <td><img width='50' src="/storage/imagesFolder/{{$techPost->photo}}"> </td>
                            <td><?php echo $techPost->content; ?></td>

                            <td>
                                {{-- using our relationship model to inter-loop thru different tables --}}
                                {{ $techPost->tech_category ? $techPost->tech_category->title : 'No Category' }}    
                                    
                            </td>

                            <td><?php echo $techPost->tags; ?></td>

                            <td><?php echo $techPost->created_at; ?></td>
                            
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            
        </div>


@endsection