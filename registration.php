<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Container for the registration form -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Registration Form -->
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="/register.php">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="reg-email">Username</label>
                            <input type="username" class="form-control" id="reg-email" placeholder="Enter your email" >
                        </div>
                        <div class="form-group">
                            <label for="reg-password">Password</label>
                            <input type="password" class="form-control" id="reg-password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <label for="reg-password-confirm">Confirm Password</label>
                            <input type="password" class="form-control" id="reg-password-confirm" placeholder="Confirm your password" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Register</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
