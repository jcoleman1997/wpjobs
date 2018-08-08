@extends('layouts.app')

@section('content')

    <h1> Edit Job Post </h1>
    <br>

    {!! Form::open(['action'=> ['PostsController@update', $post->id], 'method'=>'POST'])!!}
        <div class="form-group">
            {{form::label('title', 'Title')}}
            {{form::text('title', $post->title, ['class'=> 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{form::label('company', 'Company')}}
            {{form::text('company', $post->company, ['class'=> 'form-control', 'placeholder' => 'Company'])}}
        </div>

        <div class="form-group">
            {{form::label('salary', 'Salary')}}
            {{form::text('salary', $post->salary,['class'=> 'form-control', 'placeholder' => '(£)Salary'])}}
        </div>

        <div class="form-group">
                {{form::label('body', 'Body')}}
                {{form::textarea('body', $post->body, ['class'=> 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            
            {{Form::hidden('_method','PUT')}}

            {{form::submit('Submit', ['class'=>'btn btn-primary'])}}


    {!! Form::close() !!}

    


@endsection