@extends('layouts.app')

@section('content')
    <h1>Task Detail</h1>

    <p>{{ $task->content }}</p>

    <a href="{{ route('tasklist.edit', $task->id) }}">Edit Task</a>
@endsection