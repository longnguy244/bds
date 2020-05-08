@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chatroom</div>
                <chat-message></chat-message>
                <chat-log></chat-log>
                <chat-composer></chat-composer>
            </div>
        </div>
    </div>
</div>
@endsection
