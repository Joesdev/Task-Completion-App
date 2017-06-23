@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                <!-- Passes token to next page, stops anyone who did not click link from accessing page -->
                {{csrf_field()}}
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
