<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $script->name }}</title>
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

        .scene {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .scene h2 {
            margin-top: 0;
            color: #333;
        }

        .scene p {
            margin: 0;
            color: #666;
        }

        .actors-props {
            margin-top: 10px;
        }

        .actors-props h3 {
            margin-top: 0;
            color: #555;
        }

        .actors-props ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .actors-props ul li {
            margin-bottom: 5px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $script->name }}</h1>
        <p>By: {{ $script->author }}</p>
        <p>Created: {{ $script->created_at->format('M d, Y') }}</p>
        
        <h2>Scenes</h2>
        <?php  $i = 1; ?>

        @foreach($scenes as $scene)
            <div class="scene">
                <h2>Scene{{$i}} </h2>

            <?php   $i = $i++ ; ?>
            <a href="{{route('edit.scene', ['id' => $scene->id] )}}" class="btn btn-primary"> Edit Scene</a>
          <div>
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
                    @foreach(explode(',', $scene->props) as $props)
                            <li>{{ $props }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
