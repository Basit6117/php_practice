<?php
@include("connect.php");
$userid = $_GET['userid'];
$sql = "SELECT * FROM student where id='$userid'";
$data = mysqli_query($conn,$sql);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
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
    <input type="text" class="form-control"placeholder="Enter Name" name="name" value="<?php echo $result['name'];?>">
    <label >Roll No</label>
    <input type="text" class="form-control"placeholder="Enter Roll No" name="rollno"value="<?php echo $result['rollno'];?>">
    <label >Department</label>
    <input type="text" class="form-control"placeholder="Enter dept" name="dept"value="<?php echo $result['dept'];?>">
    <label >Subject</label>
    <input type="text" class="form-control"placeholder="Enter Subject" name="subject"value="<?php echo $result['subject'];?>">
    <label >Section</label>
    <input type="text" class="form-control"placeholder="Enter Section" name="section"value="<?php echo $result['section'];?>">
    <label >CGPA</label>
    <input type="text" class="form-control"placeholder="Enter CGPA" name="cgpa"value="<?php echo $result['cgpa'];?>">
    <input type="submit" name="update" value="Update" class="btn btn-primary">
  </div>
</form>
</body>
</html>
<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $dept = $_POST['dept'];
    $subject = $_POST['subject'];
    $section = $_POST['section'];
    $cgpa = $_POST['cgpa'];

$sql = "UPDATE `student` SET name='$name',rollno='$rollno',dept='$dept',subject='$subject',section='$section',cgpa='$cgpa' WHERE id='$userid'";
$result = mysqli_query($conn,$sql);
header("location: index.php");
}

?>