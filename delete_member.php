<?php
include("db.php");

$id = $_GET['id'];

$query = "DELETE FROM members WHERE member_id='$id'";

mysqli_query($conn,$query);

header("Location:view_members.php");
?>