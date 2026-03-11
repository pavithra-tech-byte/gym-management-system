<?php
include("db.php");

if(isset($_POST['submit']))
{
    $member_id = $_POST['member_id'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $query = "INSERT INTO attendance(member_id,date,status)
              VALUES('$member_id','$date','$status')";

    mysqli_query($conn,$query);

    echo "Attendance Marked Successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Mark Attendance</h2>

<form method="POST">

Member ID:<br>
<input type="number" name="member_id" required><br><br>

Date:<br>
<input type="date" name="date" required><br><br>

Status:<br>
<select name="status">
<option>Present</option>
<option>Absent</option>
</select>

<br><br>

<input type="submit" name="submit" value="Mark Attendance">

</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>