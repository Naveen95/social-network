@extends('layouts.app')

@section('content')
@include('includes.message-block')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Unsayds</div>

                <div class="panel-body">
                    <br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/unsayd') }}">
                    {{ csrf_field() }}

                              <div class="form-group">
                            <div class="col-md-6">

                                @foreach ($posts as $post)

                                    <article class = "post" data-postid="{{ $post->id }}">
                                        <p>{{$post->userpost}}</p>
                                    <div class='info'>
                                         Posted By <a href="{{route('userprofile',['username'=>$post->user->name])}}">{{$post->user->name}}</a> on {{ $post->user->created_at}}
                                    
                                    </div>
                                     
                                     <div class = 'interaction'>
                                        <a href=#>Like </a> |
                                        @if(Auth::user() == $post->user)
                            |
                                            <a href="#" class="edit">Edit</a> |
                                            <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>

                                        @endif
                                        

                                @endforeach
                               
                            </div>
                        </div>

                        <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit your say-d</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
                    
                </div>
            </div>
        </div>
    </div>
</div>

 <script>
       var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit') }}';
    </script>

@endsection
