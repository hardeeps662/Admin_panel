@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">update post</div>

                <div class="card-body">
                    <form method="POST" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')

                        <div class="form-group row">
                            <label for="title" class="col-md-3 col-form-label text-md-right">Title</label>

                            <div class="col-md-7">
                                <input id="title" type="text" class="form-control" name="title" value="{{$post->title}}" required autocomplete="title" autofocus>
                            </div>
                        </div>
                         
                        <div class="form-group row">
                            <label for="detail" class="col-md-3 col-form-label text-md-right">Detail</label>
                         

                         <div class="col-md-7">
                            <textarea class="form-control" row="4" id="detail"  name="detail">{{$post->detail}}</textarea>
                            </div>
                        </div>
                  
      <div class="form-group row">
        <label  for="category" class="col-md-3 col-form-label text-md-right">category</label>
         <div class="col-md-7">
          <select class="form-control" name="category_id" >
          	 <option value="{{$Category->id}}">{{$Category->name}}</option>
           @foreach($category as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
                    
           @endforeach
          </select>  
      </div>
     </div>
        <div class="custom-file  offset-md-1 ">
    <input type="file" class="custom-file-input"  name="post_img" id="post_img">
    <label class="custom-file-label col-md-9" for="image">Choose file</label>
  </div>                        
<br>
<br>

                        <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    update
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>









@endsection