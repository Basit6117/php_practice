<?php
@include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <form action="" method="post">
  <div class="form-group my-7" >
    <label >Name</label>
    <input type="text" class="form-control"placeholder="Enter Name" name="name">
    <label >Roll No</label>
    <input type="text" class="form-control"placeholder="Enter Roll No" name="rollno">
    <label >Department</label>
    <input type="text" class="form-control"placeholder="Enter dept" name="dept">
    <label >Subject</label>
    <input type="text" class="form-control"placeholder="Enter Subject" name="subject">
    <label >Section</label>
    <input type="text" class="form-control"placeholder="Enter Section" name="section">
    <label >CGPA</label>
    <input type="text" class="form-control"placeholder="Enter CGPA" name="cgpa">
    <input type="submit" name="submit" class="btn btn-primary">
  </div>
<!-- type="submit" class="btn btn-primary">Submit</button> -->
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $dept = $_POST['dept'];
    $subject = $_POST['subject'];
    $section = $_POST['section'];
    $cgpa = $_POST['cgpa'];

// $sql = "INSERT INTO `student`(`name`,`rollno`,`dept`,`subject`,`section`,`cgpa`)VALUES('$name','$rollno',' $dept',' $subject','$section','$cgpa')";

$sql = "INSERT INTO `student` (`name`, `rollno`, `dept`, `subject`, `section`, `cgpa`) VALUES ('$name', '$rollno', '$dept', '$subject', '$section', ' $cgpa')";
$result = mysqli_query($conn,$sql);
header("location: index.php");

}

?>