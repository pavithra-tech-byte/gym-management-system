<?php
include("db.php");

$total_members = mysqli_query($conn,"SELECT COUNT(*) as count FROM members");
$members = mysqli_fetch_assoc($total_members);

$total_payments = mysqli_query($conn,"SELECT SUM(amount) as total FROM payments");
$payments = mysqli_fetch_assoc($total_payments);

$total_attendance = mysqli_query($conn,"SELECT COUNT(*) as count FROM attendance");
$attendance = mysqli_fetch_assoc($total_attendance);
?>

<!DOCTYPE html>
<html>
<head>
<title>Reports</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Gym Reports</h2>

<h3>Total Members: <?php echo $members['count']; ?></h3>

<h3>Total Payments Collected: <?php echo $payments['total']; ?></h3>

<h3>Total Attendance Records: <?php echo $attendance['count']; ?></h3>

<br>

<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>