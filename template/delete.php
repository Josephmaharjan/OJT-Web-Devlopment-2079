<?php include 'connection/dbcon.php';
$id = $_GET['id'];

$sql = "DELETE from student where sid = $id";
$stmt = $con->prepare($sql);
$stmt->execute();



header("location:student.php?deleteSuccess=true");
