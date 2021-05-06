
if(isset(submit))
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar un libro</title>
</head>
<div>
<form method="POST" action="insert_book.php">
<input type="text" placeholder="Título" id="title" name="title">
<form action="">
<input type="text" placeholder="Autor" id="author"name ="author">
<form action="">
<input type="text" placeholder="Idioma" id="language" name="language">
<form action="">
<input type="number" placeholder="Páginas" id="pages"name="pages">
<select name="category" id="category">
<option value="Ficcion">Ficción</option>
<option value="Drama">Drama</option>
<option value="Suspenso">Suspenso</option>
<option value="ficcion">ficción</option>
</select>
<input type="number" placeholder="quantity" id="quantity" name="quantity">

<button type="submit" name="btn-submit" id="btn-create" onclick="crear()" >Agregar libro</button>
</form>
</div>
<body>
    

<script src="JS/actionss.js"></script>
</body>

</html>