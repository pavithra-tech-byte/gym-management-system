<?php
include("db.php");

if(isset($_POST['submit']))
{
    $member_id = $_POST['member_id'];
    $amount = $_POST['amount'];
    $payment_date = $_POST['payment_date'];
    $method = $_POST['method'];

    $query = "INSERT INTO payments(member_id,amount,payment_date,method)
              VALUES('$member_id','$amount','$payment_date','$method')";

    mysqli_query($conn,$query);

    echo "Payment Added Successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Payments</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Record Payment</h2>

<form method="POST">

Member ID:<br>
<input type="number" name="member_id" required><br><br>

Amount:<br>
<input type="number" name="amount" required><br><br>

Payment Date:<br>
<input type="date" name="payment_date" required><br><br>

Payment Method:<br>
<select name="method">
<option>Cash</option>
<option>UPI</option>
<option>Card</option>
</select>

<br><br>

<input type="submit" name="submit" value="Add Payment">

</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>