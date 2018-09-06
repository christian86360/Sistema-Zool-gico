<?php


//nombre
require("conexion.php");

$usuario=$_POST["usuario"];
//$contraseña=$_GET["pass"];


 //conexion ala mysql
 $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);

 if(mysqli_connect_errno()){

	 echo "Fallo al conectar con la base de datos";

	exit();
 }
  //para buscar la contraseña
 // mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base dedatos");
 //para imcluir los caracteres los acentos
 mysqli_set_charset($conexion,"utf8");
 //consulta de sql
 $consulta="SELECT * FROM asunto_proc";
 //para generar la consulta
 $resultados=mysqli_query($conexion,$consulta);


 //$consulta = "SELECT * FROM usuarios WHERE nombre_usuario=$usuario ;";
 //and contraseña=$contraseña

 if ($usuario=="christian") {
 //&& $contraseña =="ruso1234"

 header("location:inicio.php");

 }
 else {

 echo "<script>alert('usuario o Contraseña son Incorrectos');</script>";
 echo "Error";

 }
