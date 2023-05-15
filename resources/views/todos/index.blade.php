<!-- resources/views/todos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
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
    <h1>Todo List</h1>
    <a href="{{ route('todos.create') }}" class="btn">Add New Todo</a>
    <ul>
        @foreach ($todos as $todo)
            <li>
                @if ($todo->state === 'completed')
                    <del>{{ $todo->title }}</del>
                @else
                    {{ $todo->title }}
                @endif
                <a href="{{ route('todos.show', $todo) }}" class="btn">View Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>