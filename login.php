<?php
session_start();
include("db.php");

if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1)
{
$_SESSION['admin']=$username;
header("Location: dashboard.php");
}
else
{
$error="Invalid Username or Password";
}
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Gym Login</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="login-container">

<div class="login-box">
<h1 style="margin-bottom:10px;">🏋️ Gym System</h1>
<h2>Gym Admin Login</h2>

<?php
if(isset($error))
{
echo "<p style='color:red'>$error</p>";
}
?>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>

</form>

</div>

</div>

</body>
</html>