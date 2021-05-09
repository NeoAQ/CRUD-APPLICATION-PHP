<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Libros</title>

</head>
<body>


<?php
    include 'connection.php';
    $sql="Select * from contacts";
    $resultado= mysqli_query($conn,$sql);
    ?>
<div class="container">

    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Matricula</th>
                    <th>Titulo</th>
                     <th>Author</th>
                    <th>Paginas</th>
                    <th>Idioma</th>
                    <th>Fecha</th>
                    <th>Estatus</th>
                    </tr>
            </thead>
            <tbody>
            <?php

            while ($filas= mysqli_fetch_assoc($resultado)):
            

            ?>
           
          <tr>
               <th> <?php echo $filas['id']?></th>
                <th><?php echo $filas['name']?></th>
               <th><?php echo $filas['id_student']?></th>
                <th><?php echo $filas['title']?></th>
                <th><?php echo $filas['author']?></th>
                 <th><?php echo $filas['pages']?></th>
                <th><?php echo $filas['language']?></th>
                <th><?php echo $filas['date']?></th>
                <th><?php echo $filas['status']?></th>
                <th>
              <button> <a href="updateprestamo.php?id=<?php echo $filas['id']?>"> Editar </a> </button>
              <button> <a href="deleteprestamo.php?id=<?php echo $filas['id']?>"> Eliminar </a> </button>

                </th>
                 
            </tr>
            <?php
            endwhile;
            ?>
            </tbody>
        </table>
    </div>
    </div>

    
    <a id = "centeredbtn"   href="agregarprestamo.php"><button>Agregar prestamo</button></a>
  
      
   



   
</body>
<script src="JS/actionss.js"></script>
</html>