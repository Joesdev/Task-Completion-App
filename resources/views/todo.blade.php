@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                <input type="text" class="form control input-lg" placeholder="Next Action Step.." name="todo">
            </form>

        </div>
    </div>
    <hr>
    @foreach($todo_data as $todo)
        {{ $todo['to_do'] }};
        <hr>
    @endforeach
@stop
