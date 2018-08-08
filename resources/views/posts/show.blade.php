@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-primary"> Go Back </a>
<hr>
    <h1> <b> Job Position: </b>{{$post->title}}</h1>
    
    <div>
       <h3> <b> Company: </b>{{$post->company}} </h3>
    </div>
    <div>
        <h5> <b>Salary:</b> £{{$post->salary}} </h5>
     </div>

        <hr>

        <div>
             <b> Job Description: </b> {{$post->body}}
        </div>
    <hr>
    <small> Posted on {{$post->created_at}} by <b> {{$post->user->name}} </b> </small>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary"> Edit </a>

            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
@endsection
