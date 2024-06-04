<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $script->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5em;
            color: #333;
            text-align: center;
            margin-bottom: 0.5em;
        }

        p.author, p.date {
            text-align: center;
            color: #777;
            margin: 0;
        }

        .scene {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fdfdfd;
        }

        .scene h2 {
            font-size: 1.5em;
            color: #444;
            margin-bottom: 10px;
        }

        .scene-content {
            white-space: pre-wrap;
            color: #333;
            margin-bottom: 20px;
            padding: inherit;
            background: lightgray;
        }

        .actors-props h3 {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 10px;
            background: aquamarine;
    padding: 10px;
        }

        .actors-props ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .actors-props ul li {
            color: #666;
        }

        .scene-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $script->name }}</h1>
        <p class="author">By: {{ $script->author }}</p>
        <p class="date">Started: {{ $script->created_at->format('M d, Y') }}</p>

        <h2>Scenes</h2>
        @foreach($scenes as $index => $scene)
            <div class="scene">
                <h2>Scene {{ $index + 1 }}</h2>
                <div class="scene-content">
                    {!! $scene->scene !!}
                </div>
                <div class="actors-props">
                    <h3>Actors</h3>
                    <ul>
                        @foreach(explode(',', $scene->actors) as $actor)
                            <li>{{ $actor }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="actors-props">
                    <h3>Props</h3>
                    <ul>
                        @foreach(explode(',', $scene->props) as $prop)
                            <li>{{ $prop }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="scene-buttons">
                    <a href="{{ route('edit.scene', ['script' => $script->id, 'scene' => $scene->id]) }}" class="btn btn-primary">Edit Scene</a>
                    <form action="{{ route('delete.scene', ['scene' => $scene->id]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Scene</button>
                    </form>
                </div>
            </div>
        @endforeach
        <div class="scene-buttons">
            <a href="" class="btn btn-success">Add New Scene</a>
        </div>
    </div>
</body>
</html>
