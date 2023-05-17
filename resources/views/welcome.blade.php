<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Task Manager</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .logo {
            font-size: 60px;
            color: #3490dc;
            margin-bottom: 20px;
        }
        
        .title {
            font-size: 30px;
            color: #555555;
            margin-bottom: 10px;
        }
        
        .description {
            font-size: 16px;
            color: #777777;
            margin-bottom: 30px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3490dc;
            color: #fff;
            font-size: 18px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .btn:hover {
            background-color: #2176bd;
        }
    </style>
</head>
<body>
    <div class="container">
        <span class="logo">
            <i class="fas fa-tasks"></i>
        </span>
        <h1 class="title">Welcome to Task Manager</h1>
        <p class="description">Start managing your tasks now!</p>
        <a class="btn" href="{{ url('/todos') }}">
            Go to Tasks
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</body>
</html>
