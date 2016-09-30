@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile Settings</div>

                <div class="panel-body">
                   <center><h2>Chat</h2></center><br>

                    <form enctype="multipart/formdata"class="form-horizontal" role="form" method="POST" action="{{url('/chat')}}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Your Message here</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="message" ></textarea>
                                <input type = "hidden" name = "recipients[]" value = "{{$receiver}}">
                               
                                
                                
                                

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Send message
                                </button>
                            </div>
                        </div>


                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
