@extends('base')

@section('title', 'Messages')

@section('content')

    <div class="wrapper">
        <h2>{{$myMessage->title}}</h2>
        <p class="message-content">{{$myMessage->content}}</p>
        <a href="/">Go back</a>
    </div>

@endsection()