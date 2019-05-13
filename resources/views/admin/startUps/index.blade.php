@extends('layout.adminLayout')

@section('content')

    <h1>ADMIN Start Ups</h1>

    <div class="add_user">
            <a href="{{route('admin.startUps.create')}}">ADD Start Ups</a>
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

                     @foreach($startUps as $startUp)
                        <tr>
                            <td><?php echo $startUp->id; ?></td>
                            <td><?php echo $startUp->title; ?>
                                
                             <div class="action_links">

                                {{-- <form accept-charset="UTF-8" action="{{route('admin.startUps.destroy', $startUp->id)}}" method="POST" class="pull-right">
                                    @csrf
                                    <input id="delbtn" class="delete_link btn btn-danger confirm" type="submit" value="Delete">
                                    <input name="_method" type="hidden" value="DELETE">
                                </form> --}}

                                {{-- using modal delete confirmation. the modal is in adminLayout.blade.php --}}
                                <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$startUp->id}})" 
                                        data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>

                                {{-- the code above begets this in viewSource or inspectElement --}}
                                {{-- <form method="POST" action="http://lsapp.me/posts/1" accept-charset="UTF-8">
                                    <input name="_token" type="hidden" value="YGkYZzmhzO7gr2Mbr0Hd9cCs2tJjOpXHP1dnvES8"> 
                                    <input class="btn btn-danger confirm" data-confirm="Are you sure you want to delete?" type="submit" value="Delete">
                                    <input name="_method" type="hidden" value="DELETE">
                                 </form> --}}
                                        
                                {{-- <a href="{{route('admin.startUps.destroy', $startUp->id)}}">Delete</a> --}}

                                <a href="{{route('admin.startUps.edit', $startUp->id)}}">Edit</a>
                                <!-- <a href="../post.php?id=<?php //echo $post->id; ?>">View</a> -->

                            </div>

                            </td>

                            

                            <td><img width='50' src="/storage/imagesFolder/{{$startUp->photo}}"> </td>
                            <td><?php echo $startUp->content; ?></td>

                            <td>
                                {{-- using our relationship model to inter-loop thru different tables --}}
                                {{ $startUp->start_up_category ? $startUp->start_up_category->title : 'No Category' }}    
                                    
                            </td>

                            <td><?php echo $startUp->tags; ?></td>

                            <td><?php echo $startUp->created_at; ?></td>
                            
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            
        </div>


@endsection