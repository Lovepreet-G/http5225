<?php
    session_start();

    include "conn.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query ="SELECT * From users
                    WHERE userName ='".$username."' AND password = '".$password."'
                    ";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==0)
        {
            echo '<script>alert("Username or password is incorrect")</script>'; 
        }
        else 
        {
            $temp = mysqli_fetch_array($result);
            $_SESSION["userId"]= $temp["userId"];
            header('location: index.php');
        }
        
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Expense Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Expense Tracker</h1>
        <h2 class="text-center mt-5">Sign In</h2>
        <div class="mt-4">
            <form method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
            <p class="mt-3">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>
</body>

</html>
