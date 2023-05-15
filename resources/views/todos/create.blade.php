<!-- resources/views/todos/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Todo</title>
    <style>
        .btn {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 12px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Add Todo</h1>
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <button type="submit" class="btn">Add Todo</button>
        <a href="{{ route('todos.index') }}" class="btn">Cancel</a>
    </form>
</body>
</html>