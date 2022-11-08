<?php
include "EstudianteModel.php";
$nuevoEstudiante = new Estudiante();
$nuevoEstudiante->GuardarEstudiante($_POST['nombre'],$_POST['precio']);

/*else
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EditarEstudiante($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['direccion'],$_POST['telefono']); 
 header('Location: vistaEstudiante.php');
        
}*/


/*EDITAR*/