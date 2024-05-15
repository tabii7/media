<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unique Script Writing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            font-size: 18px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group textarea {
            width: calc(100% - 22px); /* Adjusting for input padding */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            resize: none;
        }
        .form-group textarea {
            height: 100px;
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
        .actor-prop-list {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }
        .actor-prop-list li {
            margin-bottom: 10px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .scene-list .scene {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }
        .scene-list .scene h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #333;
        }
        .scene-list .scene p {
            margin: 0;
            color: #666;
        }
        .form-group input[type="text"]:focus,
        .form-group textarea:focus,
        .btn:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .datalist-container {
            position: relative;
            margin-bottom: 20px;
        }
        .datalist-container input[type="text"] {
            border-radius: 5px;
            padding-right: 30px;
        }
        .datalist-container .datalist-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #999;
        }
        .datalist-container input[type="text"]:focus + .datalist-icon {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{$script->name}}</h1>
        <p class>by</p>
        <h3>{{$script->author}}</h3>
        <form id="script-form" method="POST" action="{{ route('scripts.scenes.add', ['script' => $script->id]) }}">
            <div class="form-group">
                <label for="actor">Actors:</label>
                <input type="text" id="actor" name="actors" list="actor-list">
                <datalist id="actor-list">
                    <!-- Actors will be dynamically added here -->
                </datalist>
            </div>
            <div class="form-group">
                <label for="prop">Props Used:</label>
                <input type="text" id="prop" name="props">
            </div>
            <div class="form-group">
                <label for="scene">Add Scene:</label>
                <textarea id="scene" name="scene" placeholder="Describe your scene..."></textarea>
            </div>
            <button type="submit" class="btn">Add Scene</button>
        </form>
        
        <h2>Actors & Props</h2>
        <ul class="actor-prop-list" id="actor-prop-list">
            <!-- Actor and Prop items will be dynamically added here -->
        </ul>
        
        <h2>Scenes</h2>
        <div class="scene-list" id="scene-list">
            <!-- Scene items will be dynamically added here -->
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Include Axios for making AJAX requests -->

    <script>
        CKEDITOR.replace('scene', {
            toolbar: [
                { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
                { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                { name: 'styles', items: ['Styles', 'Format'] },
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
                { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
                { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
                { name: 'tools', items: ['Maximize'] },
                { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] }
            ]
        });


        document.getElementById('script-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get values from the form
            var actor = document.getElementById('actor').value.trim();
            var props = document.getElementById('prop').value.trim();
            var scene = CKEDITOR.instances.scene.getData().trim();
            
            // Clear form fields
            document.getElementById('prop').value = '';
            CKEDITOR.instances.scene.setData('');
            
            // Add Actors and Props to the list
            var actorPropList = document.getElementById('actor-prop-list');
            var actorProps = '<li><strong>Actor:</strong> ' + actor + '<br><strong>Props:</strong> ' + props + '</li>';
            actorPropList.innerHTML += actorProps;
            
            // Add Scene to the list
            var sceneList = document.getElementById('scene-list');
            var sceneItem = '<div class="scene"><h3>Scene</h3><p>' + scene + '</p></div>';
            sceneList.innerHTML += sceneItem;

            // Add actor to datalist for suggestion
            var actorDatalist = document.getElementById('actor-list');
            var option = document.createElement('option');
            option.value = actor;
            actorDatalist.appendChild(option);
        
  
   

    console.log(actor, props, scene);

    if (!actor || !props || !scene) {
        alert('Please fill in all fields.'); // Display an error message if any field is empty
        return;
    }

    // Get form data
    var formData = new FormData();
    formData.append('actors', actor);
    formData.append('props', props);
    formData.append('scene', scene);
    
    // Define the URL for the AJAX request
    var url = this.action;

    // Retrieve CSRF token from the meta tag
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Set CSRF token in the request headers
    axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;


    // Send AJAX request
    axios.post(url, formData)
        .then(function (response) {
            // Handle success
            console.log(response.data); // Output any response from the server
            alert('Scene added successfully!'); // You can also display a success message to the user

            // Clear form fields after successful submission
            document.getElementById('prop').value = '';
            CKEDITOR.instances.scene.setData('');
        })
        .catch(function (error) {
            // Handle errors
            console.error(error); // Output any errors
            alert('An error occurred. Please try again.'); // Display an error message to the user
        });
});

    </script>
</body>
</html>
