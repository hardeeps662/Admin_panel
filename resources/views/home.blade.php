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
        <h2>{{$post->title}}</h2>
        <p>{{$post->detail}}</p><br><br>
          
          <img width="250px" src="{{asset($path)}}" alt="" class="">
          <br>
          <br>
        <a class="btn btn-primary btn-sm"href="{{route('post.show',$post->id)}}">view</a>  
          @if(Auth::id()==1)
              <a class="btn btn-success btn-sm"href="{{route('post.edit',$post->id)}}">edit</a> 
          @endif 

          <br>
          <br>
          <hr>
    @endforeach
                 

</div>

 </div>   
</div>
</div>
@endsection
