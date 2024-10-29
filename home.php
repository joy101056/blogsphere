<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Role</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
        }
        .card {
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
        }
        .card h3 {
            font-weight: bold;
        }
        .form-check-label {
            font-size: 1.1rem;
            margin-left: 0.5rem;
            color: #f8f9fa;
        }
        .form-check-input {
            accent-color: #f8f9fa;
            cursor: pointer;
            transform: scale(1.2);
        }
        .btn-select-role {
            width: 100%;
            margin-top: 1rem;
            padding: 0.75rem;
            font-size: 1.1rem;
            background-color: #ffffff;
            color: #2575fc;
            border: none;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        .btn-select-role:hover {
            background-color: #f0f2f5;
            color: #2575fc;
        }
    </style>
</head>
<body>

<div class="card">
    <h3 class="text-center mb-4">Choose Your Role</h3>
    <form id="roleForm">
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="role" id="adminRole" value="admin" required>
            <label class="form-check-label" for="adminRole">
                <i class="fas fa-user-shield"></i> Admin
            </label>
        </div>
        <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="role" id="userRole" value="user" required>
            <label class="form-check-label" for="userRole">
                <i class="fas fa-user"></i> User
            </label>
        </div>
        <button type="submit" class="btn btn-primary btn-select-role">Proceed</button>
    </form>
</div>

<script>
    document.getElementById("roleForm").addEventListener("submit", function(event) {
        event.preventDefault();
        const selectedRole = document.querySelector('input[name="role"]:checked').value;

        // Redirect based on the selected role
        if (selectedRole === "admin") {
            window.location.href = "http://localhost/blogsphere/admin";
        } else if (selectedRole === "user") {
            window.location.href = "http://localhost/blogsphere/user/homepage.php";
        }
    });
</script>


</body>
</html>
