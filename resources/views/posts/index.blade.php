@extends('layouts.app')

@section('content')

    <h1> Jobs </h1>
    <br>
    @if (count($posts) > 0)
       @foreach($posts as $post)
           
        <div class='well'>
                
            <h3> <a href="/posts/{{$post->id}}">{{$post->title}} </a> </h3>
            <h5> {{$post->company}} </h5>
            <h6> £{{$post->salary}} </h6>
            <small> Posted on {{$post->created_at}} by <b> {{$post->user->name}} </b> </small>
            <hr>
            
        </div>
        @endforeach

    @else
    <p> No jobs found </p>
    @endif

@endsection