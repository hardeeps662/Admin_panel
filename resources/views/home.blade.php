@extends('layouts.app')

@section('content')

<style type="text/css">
    .avatar{
        border-radius: 100%;
        max-width: 120px;
    }

</style>
<div class="container">
    <div class="card">
    <div class="card-header">Posts of User</div>
    <div class="row">
 <div class="col-md-3">
       <img src="{{asset('storage/upload/images.jpg')}}" alt="" class="avatar"><br>  
                   
                 {{$profile->name}}<br>
                   {{$profile->designation}}

 </div>
 <div class="col-md-7">
   
             @foreach($post as $post)
             <h4>{{$post->id}}: Post Title</h4>{{$post->title}}
             <h4>comment</h4>{{$post->detail}}<br><br>

              <a class="btn btn-primary btn-sm"href="{{route('post.show',$post->id)}}">view</a>  
              @if(Auth::id()==1)
              <a class="btn btn-success btn-sm"href="{{route('post.edit',$post->id)}}">edit</a> 
              @endif
                       @endforeach
                 

</div>
 </div>   
</div>
</div>
@endsection
