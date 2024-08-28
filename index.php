<?php
@include("connect.php");
$sql = "SELECT * FROM student";
$data = mysqli_query($conn,$sql);
$total = mysqli_num_rows($data);
if($total != 0){
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
    <table class="table  table-hover table-sm">
        <thead class="thead thead-dark">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Department</th>
                <th>Subject</th>
                <th>Section</th>
                <th>CGPA</th>
                <th>Operations</th>
            </tr>
        </thead>
        
<?php
while($result = mysqli_fetch_assoc($data)){
   echo "<tr>
    <td>".$result['id']."</td>
    <td>".$result['name']."</td>
    <td>".$result['rollno']."</td>
    <td>".$result['dept']."</td>
    <td>".$result['subject']."</td>
    <td>".$result['section']."</td>
    <td>".$result['cgpa']."</td>
    <td><a class='btn btn-success' href='update.php?userid=".$result['id']."'>Update</a>
    <a class='btn btn-danger' href='delete.php?userid=".$result['id']."'>Delete</a><td>

    
    </tr>";
}


}
?>

    </table>
    <a class="btn btn-primary" href="display.php">Add User</a>
</body>
</html>
