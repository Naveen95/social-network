@extends('layouts.app')

@section('content')
@include('includes.message-block')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile Settings</div>

                <div class="panel-body">
                    <br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user-post') }}">
                    {{ csrf_field() }}
                    <input type ='hidden' value = '{{Session::token()}}' name = "_token">

                    <div class="form-group">
                            

                            <div class="col-md-6">
                                <textarea style="width: 905px; height: 109px;" rows="4" columns="50" class="form-control" name="userpost" placeholder="Un-Say-d here"></textarea>
                                
                            </div>
                        </div>


                          <div class="form-group">
                            

                            <div class="col-md-6">
                                
                            </div>
                        </div>


                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Say
                                </button>
                            </div>
                        </div>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
