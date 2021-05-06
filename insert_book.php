<?php 
	require 'connection.php';

	$title=$_POST['title'];
	$author=$_POST['author'];
    $language=$_POST['language'];
    $pages=$_POST['pages'];
    $category=$_POST['category'];
    $quantity=$_POST['quantity'];

	

	



     $sql="INSERT INTO `books`(`id`, `name`, `author`, `pages`, `language`, `category`, `quantity`) 
     VALUES (NULL,'$title','$author','$pages','$language','$category','$quantity')";

    echo($sql);
$resultado= mysqli_query($conn,$sql);
	if ($sql) {
	
	
        header('Location: index.php');
	

	}
	else{
		echo "No se a guardado";
		
	}
 ?>