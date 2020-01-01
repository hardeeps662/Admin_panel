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
    <div class="card-header text-center">Posts of User</div>
    <div class="row">
 <div class="col-md-3">
      <ul class="list-group">
     <li class="list-group-item  list-group-item-success">All Category</li>
        @foreach($category as $category)
  <li class="list-group-item"><a href="{{route('category.show',$category->id)}}">{{$category->name}}</a></li>
        @endforeach
  
</ul> 
                   
               

 </div>
 <div class="col-md-7">
   
           {{$post->title}}<br>
           {{$post->detail}}
                 

</div>
 </div>   
</div>
</div>



@endsection



