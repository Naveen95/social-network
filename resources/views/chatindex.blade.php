@extends('layouts.app')

@section('content')
    @if (Session::has('error_message'))
        <div class="alert alert-danger" role="alert">
            {!! Session::get('error_message') !!}
        </div>
    @endif
    @if($threads->count() > 0)
        @foreach($threads as $thread)
        <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>
        <div class="media alert {!!$class!!}">
            <h4 class="media-heading">{!! link_to('messages/' . $thread->id, $thread->creator()->name) !!}</h4>
            <p>{!! $thread->latestMessage->body !!}</p>
            
        </div>
        @endforeach
    @else
        <p>Sorry, no threads.</p>
    @endif
@stop

