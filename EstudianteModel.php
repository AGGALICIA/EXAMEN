<?php
include_once "conexion.php";


class Estudiante
{
    private $nombre;
    private $precio;


    /*public function __construct($ape,$nom,$dir,$tel)
    {
        $this->apellidos = $ape;
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->telefono = $tel;
    }*/

    public function GuardarEstudiante($ape,$nom)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into producto(nombre,precio) values ("."'".$_POST['nombre']."','".$_POST['precio']."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: VistaEstudiante.php");
    }
    public function ListarEstudiantes()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from producto");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Estudiantes...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarEstudiante($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from producto where codigo=$id");
      return $resultado;
    }

    public function EditarEstudiante($nom,$pre)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update producto set nombre="."'".$nom."',precio="."'".$pre."'"." where codigo = $id");
    }

}
