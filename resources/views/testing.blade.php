<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Select User Type:</h2>
    
    <div class="form-check">
        <input class="form-check-input" type="radio" name="userType" id="normalUser" value="normalUser" checked>
        <label class="form-check-label" for="normalUser">
            Normal User
        </label>
    </div>
    
    <div class="form-check">
        <input class="form-check-input" type="radio" name="userType" id="adminUser" value="adminUser">
        <label class="form-check-label" for="adminUser">
            Admin User
        </label>
    </div>

    <div class="mt-3" id="userForm">
        <!-- Normal User Form -->
        <form id="normalUserForm">
            <div class="mb-3">
                <label for="normalUsername" class="form-label">Username:</label>
                <input type="text" class="form-control" id="normalUsername" name="normalUsername">
            </div>
            <!-- Add more fields as needed for the normal user form -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Admin User Form -->
        <form id="adminUserForm" style="display: none;">
            <div class="mb-3">
                <label for="adminUsername" class="form-label">akd:</label>
                <input type="text" class="form-control" id="adminUsername" name="adminUsername">
            </div>
            <!-- Add more fields as needed for the admin user form -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('input[name="userType"]').change(function () {
            if ($(this).val() === 'normalUser') {
                $('#normalUserForm').show();
                $('#adminUserForm').hide();
            } else {
                $('#normalUserForm').hide();
                $('#adminUserForm').show();
            }
        });
    });
</script>

</body>
</html>
