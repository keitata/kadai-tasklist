@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasklist.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="content">Content:</label>
            <input type="text" id="content" name="content" value="{{ old('content', $task->content) }}" required>
        </div>
        <button type="submit">Update Task</button>
    </form>
@endsection