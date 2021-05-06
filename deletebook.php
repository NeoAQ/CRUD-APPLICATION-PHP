<?php
include 'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM `books` where id ='".$id."'";
$result=mysqli_query($conn, $sql);
header('Location: index.php');
?>