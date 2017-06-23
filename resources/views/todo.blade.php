@extends('layout')

@section('content')
    @foreach($todo_data as $todo)
        {{ $todo['to_do'] }};
        <hr>
    @endforeach
@stop
