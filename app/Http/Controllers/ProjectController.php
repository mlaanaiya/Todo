<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255', Rule::unique('projects')],
        ]);

        Project::create($validatedData);

        return redirect()->route('todos.index')->with('success', 'Project created successfully');
    }

    public function destroy(Project $project)
    {
    // Delete the project
    $project->delete();

    // Optionally, you can also delete associated todos if needed
    $project->todos()->delete();

    return redirect()->route('todos.index')->with('success', 'Project deleted successfully');
    }

}
