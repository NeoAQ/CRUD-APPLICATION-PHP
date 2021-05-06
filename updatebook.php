<?php
include 'connection.php';
$id=$_GET['id'];
$sql="Select* from books where id ='".$id."'";

$result=mysqli_query($conn, $sql);
while($fila=mysqli_fetch_array($result)):
  

?>

<div>

<form method="POST" action="update_book.php">
<input type="text" name="id" id="id" value="<?php echo $fila['id'] ?>">
<input type="text" placeholder="Título" id="title" name="title" value="<?php echo $fila['name'] ?>">
<input type="text" placeholder="Autor" id="author" name="author" value="<?php echo $fila['author'] ?>">

<input type="text" placeholder="Idioma" id="language" name="language" value="<?php echo $fila['language'] ?>">

<input type="number" placeholder="Páginas" id="pages"name="pages"value="<?php echo $fila['pages'] ?>">
<select name="category" id="category"value="<?php echo $fila['category'] ?>">
<option value="Ficcion">Ficción</option>
<option value="Drama">Drama</option>
<option value="Suspenso">Suspenso</option>
<option value="ficcion">ficción</option>
</select>
<input type="number" placeholder="quantity" id="quantity" name="quantity" value="<?php echo $fila['quantity'] ?>">

<button type="submit" name="btn-submit" id="btn-create" onclick="crear()" >Editar libro</button>
</form>
<?php
endwhile;
?>


