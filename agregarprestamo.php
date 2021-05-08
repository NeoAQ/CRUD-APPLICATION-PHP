

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar un libro</title>
</head>
<div>
<form method="POST" action="insert_prestamo.php">
<input type="text" placeholder="Nombre" id="name" name="name">
<input type="text" placeholder="Matricula" id="id_s" name="id_s">



<input type="text" placeholder="Título" id="title" name="title">

<input type="text" placeholder="Autor" id="author"name ="author">
<input type="number" placeholder="Páginas" id="pages"name="pages">

<input type="text" placeholder="Idioma" id="language" name="language">

<input type="date"  id="date" name="date">
<input type="text" placeholder="status" id="status" name="status">

<button type="submit" name="btn-submit" id="btn-create" onclick="crear()" >Agregar libro</button>
</form>
</div>
<body>
    

<script src="JS/actionss.js"></script>
</body>

</html>