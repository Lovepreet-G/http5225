<?php
session_start();

include "conn.php";


// Initialize variables for form input
$date = $amount = $transactionType = $description = '';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $transactionType = $_POST['transaction_type'];
    $description = $_POST['description'];

   

    // Insert data into the transactions table
    $query = "INSERT INTO transactions (date, amount, transactionType, transactionDescription,userId) VALUES ('$date', '$amount', '$transactionType', '$description',".$_SESSION["userId"].")";
    $result = mysqli_query($conn,$query);

    // Check if the insertion was successful
    if ($result === true) {
        echo '<div class="alert alert-success mt-3" role="alert">Transaction added successfully!</div>';
    } else {
        echo '<div class="alert alert-danger mt-3" role="alert">Error adding transaction: ' . $conn->error . '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <h1 class="mb-4">Add Transaction</h1>
        <h6><a href="index.php">Back to Home Page</a> </h6>
        <!-- Transaction Form -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
                <small id="emailHelp" class="form-text text-muted">Add Amount in negative if it is debit (eg. amount = -100)</small>            </div>
            <div class="form-group">
                <small id="emailHelp" class="form-text text-muted"></small>
                <label for="transaction_type">Transaction Type:</label>
                <input type="text" class="form-control" id="transaction_type" name="transaction_type" required>
                <small id="emailHelp" class="form-text text-muted">(eg:- Withdrawal, Credit, Deposit etc)</small>

            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
