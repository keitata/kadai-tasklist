<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tasks = Task::all();
        $tasks = Task::orderBy('created_at', 'desc')->paginate(3);
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
            'status' => 'required|string|max:10',
        ]);

        Task::create([
            'content' => $request->input('content'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('tasks.index')->with('success', 'タスクが作成されました!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'content' => 'required|string|max:255',
            'status' => 'required|string|max:10',
        ]);

        $task = Task::findOrFail($id);
        $task->update([
            'content' => $request->input('content'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('tasks.index')->with('success', 'タスクが更新されました!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'タスクが削除されました!');
    }
}
