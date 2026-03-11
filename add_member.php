<?php
include("db.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $plan_id = $_POST['plan_id'];
    $join_date = $_POST['join_date'];
    $expiry_date = $_POST['expiry_date'];

    $query = "INSERT INTO members(name,phone,email,address,plan_id,join_date,expiry_date)
              VALUES('$name','$phone','$email','$address','$plan_id','$join_date','$expiry_date')";

    mysqli_query($conn,$query);

    echo "Member Added Successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Member</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Add Gym Member</h2>

<form method="POST">

Name:<br>
<input type="text" name="name" required><br><br>

Phone:<br>
<input type="text" name="phone" required><br><br>

Email:<br>
<input type="email" name="email"><br><br>

Address:<br>
<textarea name="address"></textarea><br><br>

Plan ID:<br>
<input type="number" name="plan_id" required><br><br>

Join Date:<br>
<input type="date" name="join_date" required><br><br>

Expiry Date:<br>
<input type="date" name="expiry_date" required><br><br>

<input type="submit" name="submit" value="Add Member">

</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>