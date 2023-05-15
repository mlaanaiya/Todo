<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();

        return view('todos.index', compact('todos'));
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $validatedDate = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $todo = Todo::create($validatedDate);

        return redirect()->route('todos.index')->with('success', 'Todo created successfully.');
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update(['state' => $request->has('completed') ? 'completed' : 'incomplete']);

        return redirect()->route('todos.index') > with('success', 'Todo updated successfully.');
    }
}