@extends('layouts.app')

@section('content')
@include('includes.message-block')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{$user->avatar}}" style = "width:150px; height :150px; float:left; border-radius:50%; margin-right:25px;">
           <h2>{{$user->name}}'s Profile image</h2>

           <form enctype ="multipart/form-data" action = "/profileimage" method = "POST">
                <label>Your Profile Image</label>
                <input type = "file" name = "avatar">
                {{ csrf_field() }}
                <button type = "submit" class= "pull-right btn btn-sm btn-primary">Upload image</button>
          </form>

            

                    
                
           
        </div>
    </div>
</div>
@endsection
