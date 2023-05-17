<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="container mx-auto py-4">
        <h1 class="text-2xl font-bold mb-4">Create Project</h1>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" name="name" id="name" class="border border-gray-300 rounded-md p-2 w-full" value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Create</button>
                <a href="{{ route('todos.index') }}" class="text-gray-500 ml-2">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
