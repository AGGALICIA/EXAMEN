<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a87f2bfe07.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a87f2bfe07.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"><script src="https://kit.fontawesome.com/a87f2bfe07.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
    </head>
<body>
    <div class="container">
    <p>
         <center> <h2>INGRESE SUS DATOS AQUI</h2></center>
         <center> <h3> eXperimenta la libertad</h3></center>
    </p>
    <center><div class="contenedor">
    <form action="EstudianteController.php" method="post">
   
    <p>
         <div class="col-4">
        <label for="nombre">Nombre</label> 
        <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
        </p>
    </div>

        
         <p>
        <div class="col-4">
        <label for="precio">Precio </label>
        <input type="text" class="form-control" name="precio" placeholder="Ingresa tus Apellidos">
        </p>
        </div>

           <p>
            <input type="submit" value="Enviar Datos">
        </p>
        </div>     
        </center>  
        </div>  
        </center>  
        </div>  
        <hr>
    <center><h3>LISTADO DE ESTUDIANTES</h3></center>
    <hr>
    <table class="table table-success table-striped-columns">
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th>EDAD</th>
        <th colspan="2">OPERACIONES</th>
        <tbody class="table-group-divider">
    <?php
        include_once "EstudianteModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                <td>  <?php echo $Estudiantes['apellidos'] ?> </td>
                <td>  <?php echo $Estudiantes['direccion'] ?> </td>
                <td>  <?php echo $Estudiantes['telefono'] ?> </td>
                <td>  <?php echo $Estudiantes['edad'] ?> </td>
                <td><a href="VistaEditarEstudiante.php?idEst=<?php echo $Estudiantes['idEstudiante'];?>">EDITAR</a></td>
               <td><a href="VistaEliminarEstudiante.php?idEst=<?php echo $Estudiantes['idEstudiante'];?>">ELIMINAR</a></td>
          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>