<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Scene</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <style>
        .container {
            margin-top: 50px;
        }
        .card {
            padding: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Edit Scene</h1>
    <div class="card">
    <form method="POST" action="{{ route('scenes.update', [$script->id, $scene->id]) }}">
                @csrf
            <div class="form-group">
                <label for="actors">Actors:</label>
                <input type="text" id="actors" name="actors" class="form-control" value="{{ $scene->actors }}">
            </div>
            <div class="form-group">
                <label for="props">Props:</label>
                <input type="text" id="props" name="props" class="form-control" value="{{ $scene->props }}">
            </div>
            <div class="form-group">
                <label for="scene">Scene Description:</label>
                <textarea id="scene" name="scene" class="form-control">{{ $scene->scene }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Scene</button>
        </form>
    </div>
</div>

<script>
    // Initialize CKEditor for the scene textarea
    CKEDITOR.replace('scene');
</script>
</body>
</html>
