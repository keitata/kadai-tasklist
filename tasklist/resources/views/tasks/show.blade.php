@extends('layouts.app')

@section('content')
    <!-- タスク詳細ページ -->
    <h1>タスク詳細</h1>
    <p>{{ $task->content }}</p>
    <p>Status: {{ $task->status }}</p>
    <a href="{{ route('tasks.edit', $task->id) }}">編集</a>
@endsection