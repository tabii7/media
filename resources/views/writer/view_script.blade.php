<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Scripts</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Include your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        .script-list {
            margin-top: 20px;
        }

        .script {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .script h2 {
            margin-top: 0;
            color: #333;
        }

        .script p {
            margin: 0;
            color: #666;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My Scripts</h1>

        @if($scripts->isEmpty())
            <p>No scripts found.</p>
        @else
            <div class="script-list">
                @foreach($scripts as $script)
                    <div class="script">
                        <h2>{{ $script->name }}</h2>
                        <p>By: {{ $script->author }}</p>
                        <p>Created: {{ $script->created_at->format('M d, Y') }}</p>
                        <!-- Add more details as needed -->

                        <!-- Example: Link to view script details -->
                        <a href="{{ route('scripts.show', $script->id) }}" class="btn">View Script</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
