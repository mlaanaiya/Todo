<!-- edit.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Edit Todo</h1>
        @if (session('success'))
        <div class="bg-green-200 text-green-800 p-4 rounded my-4">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{ route('todos.update', ['todo' => $todo]) }}" method="POST">
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-600 font-semibold mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded py-2 px-4" value="{{ $todo->title }}" required>
                @error('title')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-600 font-semibold mb-2">Description</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 rounded py-2 px-4" rows="4">{{ $todo->description }}</textarea>
                @error('description')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center">
                <input type="checkbox" name="completed" id="completed" class="mr-2" {{ $todo->state === 'completed' ? 'checked' : '' }}>
                <label for="completed" class="text-gray-600">Completed</label>
            </div>
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Update Todo
                </button>
            </div>
        </form>
    </div>
</body>

</html>
