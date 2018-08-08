@extends('layouts.app')

@section('content')

    <h1> Create Job Advert </h1>
    <br>

    {!! Form::open(['action'=> 'PostsController@store', 'method'=>'POST'])!!}
        <div class="form-group">
            {{form::label('title', 'Title')}}
            {{form::text('title', '', ['class'=> 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{form::label('company', 'Company')}}
            {{form::text('company', '', ['class'=> 'form-control', 'placeholder' => 'Company'])}}
        </div>

        <div class="form-group">
            {{form::label('salary', 'Salary')}}
            {{form::text('salary', '',['class'=> 'form-control', 'placeholder' => '(£)Salary'])}}
        </div>

        <div class="form-group">
                {{form::label('body', 'Body')}}
                {{form::textarea('body', '', ['class'=> 'form-control', 'placeholder' => 'Body Text'])}}
            </div>

            {{form::submit('Submit', ['class'=>'btn btn-primary'])}}


    {!! Form::close() !!}

    


@endsection