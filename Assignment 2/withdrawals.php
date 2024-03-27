<?php
// Database
include "conn.php";


// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if(!$conn) {
    die("Connection failed: " . $conn);
}

// SELECT query
$query = "SELECT date, amount, transactionType, transactionDescription FROM transactions WHERE userId = 1 AND amount<0";
$result = mysqli_query($conn,$query)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Transactions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>

    <div class="container mt-4">
        <h1 class="mb-4">All Withdrawals</h1>
        <h6><a href="index.php">Back to Home Page</a> </h6>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Transaction Type</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total =0;
                
                while ($transaction = $result->fetch_assoc()) {
                    
                    echo "<tr>
                            <td>".$transaction['date']."</td>
                            <td>".abs($transaction['amount'])."</td>
                            <td> Debit </td>
                            <td>".$transaction['transactionType']." ".$transaction['transactionDescription']."</td>
                          </tr>";
                    $total += abs($transaction['amount']);
                }
                echo "Total Debited Amount :- ".$total;

                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
