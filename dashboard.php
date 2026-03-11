<?php
session_start();

if(!isset($_SESSION['admin']))
{
header("Location:login.php");
exit();
}

include("db.php");

$members = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as count FROM members"));
$payments = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(amount) as total FROM payments"));
$attendance = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as count FROM attendance"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="sidebar">

<h2>Gym System</h2>

<a href="dashboard.php">🏠 Dashboard</a>
<a href="add_member.php">➕ Add Member</a>
<a href="view_members.php">👥 Members</a>
<a href="payments.php">💳 Payments</a>
<a href="attendance.php">📅 Attendance</a>
<a href="reports.php">📊 Reports</a>
<a href="logout.php" style="float:right;color:white;margin-right:20px;">Logout</a>

</div>

<div class="navbar">
<h3>Gym Management Dashboard </h3>
</div>

<div class="main">

<h2>Dashboard Overview</h2>

<div class="cards">

<div class="card">
<h3>Total Members</h3>
<p><?php echo $members['count']; ?></p>
</div>

<div class="card">
<h3>Total Payments</h3>
<p><?php echo $payments['total']; ?></p>
</div>

<div class="card">
<h3>Total Attendance</h3>
<p><?php echo $attendance['count']; ?></p>
</div>
</table>

</div>

</div>

</body>
</html>