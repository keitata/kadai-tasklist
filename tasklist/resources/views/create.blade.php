@extends('layouts.app')

@section('content')
    <h1>Create New Task</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasklist.store') }}" method="POST">
        @csrf
        <div>
            <label for="content">Content:</label>
            <input type="text" id="content" name="content" value="{{ old('content') }}" required>
        </div>
        <button type="submit">Create Task</button>
    </form>
@endsection