<!-- resources/views/todos/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo Details</title>
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
    <h1>Todo Details</h1>
    <h2>{{ $todo->title }}</h2>
    <p>{{ $todo->description }}</p>
    <p>{{ $todo->created_at }}</p>
    <p>{{ $todo->state }}</p>
    <a href="{{ route('todos.index') }}" class="btn">Back to List</a>
</body>
</html>