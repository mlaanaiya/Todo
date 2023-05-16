<!DOCTYPE html>
<html>
<head>
    <title>Todo Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-3xl text-center my-8">{{ $todo->title }}</h1>
        <div class="bg-white shadow rounded-lg p-8">
            <p class="text-gray-600">Description : {{ $todo->description }}</p>
            <p class="text-gray-600">Project : {{ $project->name }}</p>
            <p class="text-gray-600">Created at : {{ $todo->created_at }}</p>
            <p class="text-gray-600">Updated at : {{ $todo->updated_at }}</p>
            <p class="text-gray-600">State : {{ $todo->state }}</p>


            <form action="{{ route('todos.update', $todo) }}" method="POST" class="mt-8">
                @csrf
                @method('PUT')
                <div class="flex items-center">
                    <input type="checkbox" name="completed" id="completed" class="mr-2" {{ $todo->state === 'completed' ? 'checked' : '' }}>
                    <label for="completed" class="text-gray-600">Completed</label>
                </div>
                <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
                    <i class="fas fa-check mr-2"></i>
                    Update
                </button>
            </form>
        </div>
        <a href="{{ route('todos.index') }}" class="flex items-center mt-4 px-4 py-2 rounded-md bg-blue-500 text-white hover:bg-blue-600">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to List
        </a>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
