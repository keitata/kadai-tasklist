@extends('layouts.app')

@section('title', 'タスク一覧')

@section('content')
    <h1>タスク一覧</h1>
    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->content }}</a>
                    <span style="margin-left: 10px;">Status: {{ $task->status }}</span></br>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="cursor: pointer;">削除</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>タスクはありません。</p>
    @endif
    {{ $tasks->links() }}
@endsection