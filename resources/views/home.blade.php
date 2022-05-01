@extends('base')

@section('title', 'Messages board')

@section('content')
    <h1>Welcome to the message app :)</h1>
    <div class="wrapper">
        <h2>Post a new message:</h2>

        <form action="/create" method="post">
            @csrf
            <input type="text" name="title" placeholder="Title...">
            <input type="text" name="content" placeholder="Message...">
            <button type="submit">Submit</button>
        </form>
    
        <h2>Your messages:</h2>
    
        <ul>
            @foreach ($myMessages as $myMessage)
                <li> <strong>{{ $myMessage->title }}</strong> <br>
                     {{ $myMessage->content }} <br>
                     <span class="when-created">{{ $myMessage->created_at->format('d/m/Y H:i') }}</span> <br>
                     <span class="when-created">{{ $myMessage->updated_at->diffForHumans() }}</span> <br>
                     <a href="/message/{{$myMessage->id}}">View</a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection()