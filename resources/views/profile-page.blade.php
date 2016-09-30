@extends('layouts.app')

@section('content')
@include('includes.message-block')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Personal Page</center></div>

                <div class="panel-body">
                    <br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user-post') }}">
                    {{ csrf_field() }}
                    <input type ='hidden' value = '{{Session::token()}}' name = "_token">
                    

                    @foreach($user_details as $user)

                    Start a chat <a href="{{url('/chat',['username'=>$user->name])}}">Click Here</a>

                    @endforeach
                   

                    @foreach($user_details as $user)
                     <img src="/uploads/avatars/{{$user->avatar}}" style = "width:150px; height :150px; float:left; border-radius:50%; margin-right:25px;">

                    
                    <p><h2><center>hello This is {{$user->name}} </center></h2>
                       <h2><center>I am a {{$user->nationality}} </center></h2>
                       <h2><center>This great person was born on {{$user->dobday}}-{{$user->dobmonth}}-{{$user->dobyear}} </center></h2>
                       <h2><center>Contact me here {{$user->email}} </center></h2>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
