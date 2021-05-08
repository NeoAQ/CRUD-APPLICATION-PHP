<?php 
	require 'connection.php';
    $name= $_POST['name'];
    $idstudent= $_POST['id_s'];
	$title=$_POST['title'];
	$author=$_POST['author'];
    $language=$_POST['language'];
    $pages=$_POST['pages'];
    $date=$_POST['date'];
    $status=$_POST['status'];

	

	



    $sql= "INSERT INTO `contacts`(`id`, `name`, `id_student`, `title`, `author`, `pages`, `language`, `date`, `status`)
     VALUES (NULL,'$name','$idstudent','$title','$author','$pages','$language','$date','$status')";
    
$resultado= mysqli_query($conn,$sql);
	if ($sql) {
	
	
        echo($sql);
	

	}
	else{
		echo "No se a guardado";
		
	}
 ?>