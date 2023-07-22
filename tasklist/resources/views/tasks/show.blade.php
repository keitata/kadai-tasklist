@extends('layouts.app')

@section('content')

<!-- タスク詳細ページ -->
<h1>タスク詳細</h1>
<p>{{ $task->content }}</p>
<a href="{{ route('tasks.edit', $task->id) }}">編集</a>
    
@endsection