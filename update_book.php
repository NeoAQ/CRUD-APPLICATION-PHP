<?php 
	require 'connection.php';
	$idedit=$_POST['id'];
	$title=$_POST['title'];
	$author=$_POST['author'];
    $language=$_POST['language'];
    $pages=$_POST['pages'];
    $category=$_POST['category'];
    $quantity=$_POST['quantity'];

	

	



     $sql=

"UPDATE `books` SET `name`='$title',`author`='$author',`pages`=$pages,
`language`='$language',`category`='$category',`quantity`='$quantity' WHERE `id` = $idedit";

    echo($sql);
$resultado= mysqli_query($conn,$sql);
	if ($sql) {
	
		header('Location: index.php');
    
	

	}
	else{
		echo "No se a guardado";
		
	}
 ?>