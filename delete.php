<?php
@include("connect.php");
$userid = $_GET['userid'];
$sql = "DELETE FROM student WHERE id='$userid'";
mysqli_query($conn,$sql);
header("location: index.php");

?>