<?php
include("db.php");

$query = "SELECT * FROM members";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Members</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Gym Members List</h2>
<div class="search-box">
<input type="text" placeholder="Search Member...">
</div>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Plan ID</th>
<th>Join Date</th>
<th>Expiry Date</th>
<th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['member_id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['plan_id']; ?></td>
<td><?php echo $row['join_date']; ?></td>
<td><?php echo $row['expiry_date']; ?></td>

<td>
<a href="edit_member.php?id=<?php echo $row['member_id']; ?>">Edit</a> |
<a href="delete_member.php?id=<?php echo $row['member_id']; ?>">Delete</a>
</td>

</tr>

<?php
}
?>

</table>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>