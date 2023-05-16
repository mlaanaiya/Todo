<!DOCTYPE html>
<html>

<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <div class="flex">
    <div class="bg-gray-200 w-1/4 p-4">
    <h2 class="text-xl font-semibold mb-4">Todo Projects</h2>
    <ul class="space-y-2">
        @foreach ($projects as $project)
        <li class="py-1">
            <div class="flex items-center">
            <a href="{{ route('todos.projects.show', $project->id) }}" class="flex-1 px-4 py-2 rounded-md transition-colors duration-200 {{ request()->route('project') == $project->id ? 'bg-blue-200 text-blue-800' : 'hover:bg-blue-200 hover:text-blue-800' }}">
                    <i class="fas fa-folder mr-2 text-blue-500"></i>
                    <span>{{ $project->name }}</span>
                </a>
                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-800">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    <a href="{{ route('projects.create') }}" class="flex items-center mt-4 px-2 py-1 rounded-md bg-green-500 text-white hover:bg-green-600">
        <i class="fas fa-plus mr-2"></i>
        <span>Add Project</span>
    </a>
</div>







        <div class="container mx-auto w-3/4 p-4">
            <h1 class="text-3xl text-center my-8">Todo List</h1>

            <div class="flex flex-wrap -mx-4">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
                    <h2 class="text-xl font-semibold mb-4">Todo Incomplete</h2>
                    @foreach ($todos as $todo)
    @if ($todo->state === 'incomplete')
        <div class="bg-white shadow rounded-lg p-4 relative">
            <h2 class="text-lg font-semibold mb-2">{{ $todo->title }}</h2>
            <p class="text-sm text-gray-600">{{ $todo->description }}</p>
            <div class="flex items-center mt-4">
                <i class="far fa-check-circle text-green-500 mr-2"></i>
                <a href="{{ route('todos.show', $todo) }}" class="text-blue-500">View Details</a>
                <form class="inline-block ml-4" action="{{ route('todos.destroy', $todo) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-600">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    @endif
@endforeach

                </div>

                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
                    <h2 class="text-xl font-semibold mb-4">Todo Completed</h2>
                    @foreach ($todos as $todo)
                    @if ($todo->state === 'completed')
                    <div class="bg-white shadow rounded-lg p-4">
                        <h2 class="text-lg font-semibold mb-2">{{ $todo->title }}</h2>
                        <p class="text-sm text-gray-600">{{ $todo->description }}</p>
                        <div class="flex items-center mt-4">
                            <i class="far fa-check-circle text-green-500 mr-2"></i>
                            <a href="{{ route('todos.show', $todo) }}" class="text-blue-500">View Details</a>
                            <form class="inline-block ml-4" action="{{ route('todos.destroy', $todo) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-600">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

            @if(isset($project))
    <a href="{{ route('todos.create', ['project' => $project->id]) }}" class="flex items-center mt-4 px-4 py-2 rounded-md bg-blue-500 text-white hover:bg-blue-600">
        <i class="fas fa-plus mr-2"></i>
        Add Todo
    </a>
@endif

        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>