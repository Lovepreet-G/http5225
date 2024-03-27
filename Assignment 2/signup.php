<?php
    session_start();
    include 'conn.php';

$username = $email = $password = $confirm_password = "";
$errors = array();

// If the signup form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Ensure password and confirm password match
    if ($password != $confirm_password) {
        $errors['password'] = "passwords not matched";
    }

    // If no errors, proceed with user registration
    if (count($errors) == 0) {
        

        // Insert user details into the database
        $query = "INSERT INTO users (userName, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($conn, $query);

        // Redirect to login
        header('location: signin.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Expense Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Expense Tracker</h1>
        <h2 class="text-center mt-5">Sign Up</h2>
        <div class="mt-4">
            <form method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    <?php 
                        if(isset($errors['password']))
                        {
                            echo"<span style='color:red;'>".$errors['password']." </span>";
                            $errors['password']=NULL;
                        }

                     ?>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
            <p class="mt-3">Already have an account? <a href="signin.php">Sign In</a></p>
        </div>
    </div>
</body>

</html>
