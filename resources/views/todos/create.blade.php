<!DOCTYPE html>
<html>
<head>
    <title>Add Todo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-3xl text-center my-8">Add Todo</h1>
        <div class="bg-white shadow rounded-lg p-8">
            <form action="{{ route('todos.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-600 font-semibold mb-2">Title:</label>
                    <input type="text" id="title" name="title" required class="w-full px-4 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-600 font-semibold mb-2">Description:</label>
                    <textarea id="description" name="description" class="w-full px-4 py-2 border border-gray-300 rounded-md"></textarea>
                </div>
                <div class="form-group">
                    <label for="project_id" class="block text-gray-600 font-semibold mb-2">Project</label>
                        <select name="project_id" id="project_id" class="form-select border border-gray-300 rounded-md p-2">
                            @foreach($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
                    <i class="fas fa-save mr-2"></i>
                    Save
                </button>
            </form>
        </div>
        <a href="{{ route('todos.projects.show', $project->id) }}" class="flex-1 px-4 py-2 rounded-md transition-colors duration-200 {{ request()->route('project') == $project->id ? 'bg-blue-200 text-blue-800' : 'hover:bg-blue-200 hover:text-blue-800' }}">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to List
        </a>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
