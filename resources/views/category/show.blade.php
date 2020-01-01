@extends('layouts.app')
@section('content')



<div class="container">
    <div class="card">
    <div class="card-header text-center">Posts of User</div>
    <div class="row">
 <div class="col-md-3">
      
     <li class="list-group-item">{{$show->name}}</li></a>        
            

 </div>
 <div class="col-md-7">
 	@foreach($post as $post)
      <h4>{{$post->id}}: Post Title</h4>{{$post->title}}<br>
         {{$post->detail}}         
      @endforeach

</div>
 </div>   
</div>
</div>


@endsection