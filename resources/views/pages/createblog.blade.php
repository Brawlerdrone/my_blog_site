

@extends('layouts.master')

@section('content')
    
   <div class="container custom-login">
   {!! Form::open(['action' => 'PostsController@store' , 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '',['class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        {{Form::submit('POST', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
   </div>
    

@endsection
    