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
        .completed {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <h1>Todo List</h1>
    <a href="{{ route('todos.create') }}" class="btn">Add New Todo</a>
    <ul>
        @foreach ($todos as $todo)
            <li>
                <input type="checkbox" {{ $todo->state === 'completed' ? 'checked' : '' }} onchange="event.preventDefault(); document.getElementById('todo-form-{{ $todo->id }}').submit();">
                <form id="todo-form-{{ $todo->id }}" action="{{ route('todos.update', $todo) }}" method="POST" style="display: none;">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="completed" value="{{ $todo->state === 'completed' ? '0' : '1' }}">
                </form>
                <span class="{{ $todo->state === 'completed' ? 'completed' : '' }}">{{ $todo->title }}</span>
                <a href="{{ route('todos.show', $todo) }}" class="btn">View Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>