<?php
include("db.php");

$id = $_GET['id'];

$query = "SELECT * FROM members WHERE member_id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $update = "UPDATE members SET 
               name='$name',
               phone='$phone',
               email='$email'
               WHERE member_id='$id'";

    mysqli_query($conn,$update);

    header("Location:view_members.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Member</title>
</head>

<body>

<h2>Edit Member</h2>

<form method="POST">

Name:<br>
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

Phone:<br>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

Email:<br>
<input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>

<input type="submit" name="update" value="Update Member">

</form>

</body>
</html>