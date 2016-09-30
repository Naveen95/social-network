@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile Settings</div>

                <div class="panel-body">
                   <center><h2> Enter your Profile Details here</h2></center><br>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password-change') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('current_pass') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Current Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="current_pass" value="">

                                @if ($errors->has('current_pass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_pass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          
                        <div class="form-group{{ $errors->has('new_pass') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="new_pass" value="">

                                @if ($errors->has('new_pass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_pass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Change Password
                                </button>
                            </div>
                        </div>
                      </form>

                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
