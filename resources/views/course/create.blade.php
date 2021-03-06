@extends('layouts.master')

@section('title')
{{ $title or '' }}
@endsection

@section('content')
    <h1>{{ $title or '' }}</h1>

    <p>
    for Student <a href="/students/{{ $student->id }}">{{ $student->initials }}</a>
    </p>

    <form action="/students/{{ $student->id }}/courses" method="POST">
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

@include('course.input')

        <div class="row">
            <input class="btn btn-primary" type="submit" name="add" value="Add Course">
            <a class="btn btn-default" href="..">Cancel</a>
        </div>
    </form>

@stop