@extends('layouts.app')

@section('title', 'タスク編集')

@section('content')
    <h1>タスク編集</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="post">
        @csrf
        @method('PUT')
        @include('commons.error_message') <!-- エラーメッセージを表示 -->

        <label for="content">内容:</label>
        <input type="text" id="content" name="content" value="{{ $task->content }}" required>
        <button type="submit">更新</button>
    </form>
    <label for="status">Status:</label>
    <input type="text" name="status" value="{{ old('status', $task->status) }}" required>
@endsection






