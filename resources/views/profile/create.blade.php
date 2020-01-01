@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">user profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                         
        <div class="custom-file  offset-md-1 ">
    <input type="file" class="custom-file-input"  name="profile_pic" id="profile_pic">
    <label class="custom-file-label col-md-9" for="image">Choose file</label>
  </div>                        
<br>
<br>
 <div class="form-group row">
                            <label for="designation" class="col-md-3 col-form-label text-md-right">designation</label>

                            <div class="col-md-7">
                                <input id="designation" type="text" class="form-control" name="designation" value="{{ old('designation') }}" required autocomplete="designation" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    submit
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



