<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Project;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $projectId = $request->query('project');
        $project = Project::find($projectId);

        if ($project) {
            $todos = $project->todos()->orderBy('created_at', 'desc')->get();
        } else {
            $todos = Todo::orderBy('created_at', 'desc')->get();
        }

        $projects = Project::all();

        return view('todos.index', compact('todos', 'projects', 'project'));
    }


    public function show(Todo $todo)
    {
        $project = $todo->project;
        return view('todos.show', compact('todo', 'project'));
    }

    public function create()
    {
        $projects = Project::all();
        return view('todos.create', compact('projects'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'project_id' => 'required|exists:projects,id',
        ]);
    
        $validatedData['state'] = 'incomplete';
    
        $todo = Todo::create($validatedData);
    
        return redirect()->route('todos.projects.show', ['project' => $validatedData['project_id']])->with('success', 'Todo created successfully');
    }    
    
    public function update(Request $request, Todo $todo, Project $project)
    {
        $todo->update(['state' => $request->has('completed') ? 'completed' : 'incomplete']);

        return redirect()->route('todos.index')->with('success', 'Todo updated successfully');
    }

    public function projects()
    {
        $projects = Project::all();

        return view('todos.index', compact('projects'));
    }

    public function showProjectTodos($projectId)
    {
        $project = Project::findOrFail($projectId);

        $todos = $project->todos()->orderBy('created_at', 'desc')->get();
        $projects = Project::all();

        return view('todos.index', compact('todos', 'projects', 'project'));
    }



    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully');
    }

}