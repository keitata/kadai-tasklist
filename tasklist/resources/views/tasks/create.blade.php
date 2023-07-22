@extends('layouts.app')

@section('title', '新規タスク作成')

@section('content')
    <h1>新規タスク作成</h1>
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <label for="content">内容:</label>
        <input type="text" id="content" name="content" required>
        <button type="submit">作成</button>
    </form>
@endsection