<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>

</head>
<body>


<?php
    include 'connection.php';
    $sql="Select * from books";
    $resultado= mysqli_query($conn,$sql);
    ?>

<a href="createbook.php"><button>Agregar libro</button></a>
    
    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>author</th>
                    <th>pages</th>
                     <th>language</th>
                    <th>quantity</th>
                    <th>category</th>
                    <th>Acciones</th>
                    </tr>
            </thead>
            <tbody>
            <?php

            while ($filas= mysqli_fetch_assoc($resultado)):
            

            ?>
           
          <tr>
               <th> <?php echo $filas['id']?></th>
                <th><?php echo $filas['name']?></th>
               <th><?php echo $filas['author']?></th>
                <th><?php echo $filas['pages']?></th>
                <th><?php echo $filas['language']?></th>
                 <th><?php echo $filas['quantity']?></th>
                <th><?php echo $filas['category']?></th>
                <th>
              <button> <a href="updatebook.php?id=<?php echo $filas['id']?>"> Editar </a> </button>
              <button> <a href="deletebook.php?id=<?php echo $filas['id']?>"> Eliminar </a> </button>

                </th>
                 
            </tr>
            <?php
            endwhile;
            ?>
            </tbody>
        </table>
    </div>


    



   
</body>
<script src="JS/actionss.js"></script>
</html>