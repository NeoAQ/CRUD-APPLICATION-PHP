<?php 
	require 'connection.php';
	$idedit=$_POST['idedit'];
	$title=$_POST['title'];
	$author=$_POST['author'];
    $language=$_POST['language'];
    $pages=$_POST['pages'];
    $name=$_POST['name'];
    $status=$_POST['status'];
    $id_s=$_POST['id_s'];
    $date=$_POST['date'];

	

	



     $sql=

"UPDATE `contacts` SET `name`='$name',`id_student`='$id_s',
`title`='$title',`author`='$author',`pages`='$pages',`language`='$language',
`date`='$date',`status`='$status' WHERE `id`= $idedit";

   
$resultado= mysqli_query($conn,$sql);
	if ($sql) {
	
		header('location: index.php');
	

	}
	else{
		echo "No se a guardado";
		
	}
 ?>