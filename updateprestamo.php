<?php
include 'connection.php';
$id=$_GET['id'];
$sql="Select* from contacts where id ='".$id."'";

$result=mysqli_query($conn, $sql);
while($fila=mysqli_fetch_array($result)):
  

?>

<div>

<form method="POST" action="update_prestamo.php">
<input type="hidden" id="idedit" name="idedit" value= <?php echo($fila['id']); ?>>
<input type="text" placeholder="Nombre" id="name" name="name" value= "<?php echo($fila['name']); ?>">
<input type="text" placeholder="Matricula" id="id_s" name="id_s" value= "<?php echo($fila['id_student']); ?>">



<input type="text" placeholder="Título" id="title" name="title" value= "<?php echo($fila['title']); ?>">

<input type="text" placeholder="Autor" id="author"name ="author" value= "<?php echo($fila['author']); ?>">
<input type="number" placeholder="Páginas" id="pages"name="pages" value= "<?php echo($fila['pages']); ?>">

<input type="text" placeholder="Idioma" id="language" name="language" value= "<?php echo($fila['language']); ?>">

<input type="date"  id="date" name="date" value= "<?php echo($fila['date']); ?>">
<input type="text" placeholder="status" id="status" name="status" value= "<?php echo($fila['status']); ?>">

<button type="submit" name="btn-submit" id="btn-create" onclick="crear()" >Actualizar prestamo</button>
</form>
</div>
<?php
endwhile;
?>


