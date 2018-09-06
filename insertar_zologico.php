
<?php
//nombre
require("conexion.php");


$boton=$_POST["boton"];
//almacenamos los registros de formulario
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$pais=$_POST['pais'];
$tamaño=$_POST['tamaño'];
$presupuesto=$_POST['presupuesto'];
//conexion ala mysql
 $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
 if(mysqli_connect_errno()){

	 echo "Fallo al conectar con la base de datos";

	exit();
 }
 mysqli_set_charset($conexion,"utf8");

//guardar datos

if($boton=="guardar"){
//consulta
   $consulta="insert into Zoo values('$nombre','$ciudad','$pais','$tamaño','$presupuesto');";
 //para generar la consulta
$resultados=mysqli_query($conexion,$consulta);
if($resultados==false){
  // En caso de algun error alerta
echo "<script>alert('Datos no pudieron ser GUARDADOS')</script>";
echo "<script>window.location='registro_zoologico.php'</script>";
  }else{


 echo "<script>alert('Datos GUARDADOS Correctamente')</script>";
// Recargado de la Pagina o refrescado
echo "<script>window.location='registro_zoologico.php'</script>";
 }
 mysqli_close($conexion);
}
//modificar Datos
if($boton=="modificar"){
   $consulta="UPDATE Zoo SET nombre='$nombre',ciudad='$ciudad',pais='$pais',tamaño='$tamaño',presupuesto='$presupuesto'
   where nombre='$nombre' ";
   //para generar la consulta
  $resultados=mysqli_query($conexion,$consulta);
  if($resultados==false){
    // En caso de algun error alerta
     echo "<script>alert('Datos no pudieron ser MODIFICADOS')</script>";
     echo "<script>window.location='registro_zoologico.php'</script>";
    }else{
      echo "<script>alert('Datos MODIFICADOS Correctamente')</script>";
      // Recargado de la Pagina o refrescado, asumiendo que la llame textophp
      echo "<script>window.location='registro_zoologico.php'</script>";


  }

   mysqli_close($conexion);
}

//eliminar datos
if($boton=="eliminar"){
  $consulta="delete from zoo where nombre='$nombre'";
  //para generar la consulta
 $resultados=mysqli_query($conexion,$consulta);
 if($resultados==false){
   // En caso de algun error alerta
    echo "<script>alert('Datos no pudieron eliminar')</script>";
    echo "<script>window.location='registro_zoologico.php'</script>";
   }else{
     echo "<script>alert('Datos Eliminados Correctamente')</script>";
     // Recargado de la Pagina o refrescado, asumiendo que la llame textophp
     echo "<script>window.location='registro_zoologico.php'</script>";


 }

  mysqli_close($conexion);

}
//buscar los datos
if($boton=="buscar"){
  $consulta="select * from cliente where id_cliente='$id_cliente'";
  $resultados=mysqli_query($conexion,$consulta);
  if($resultados==false){
    // En caso de algun error alerta
     echo "<script>alert('Datos no se encontraron')</script>";
     echo "<script>window.location='registro_clientes.php'</script>";
    }else{
      echo "<script>alert('Datos encontrados')</script>";
      // Recargado de la Pagina o refrescado, asumiendo que la llame textophp
      echo "<script>window.location='registro_clientes.php'</script>";


  }

   mysqli_close($conexion);

}

//para limpiar
/*
// Limpiar
if($boton=="Limpiar"){
  // Recarga de la Pagina, tal cual si se precionara F5, para mi es mas efectivo
  echo "<script>window.location='texto.php'</script>";

}

// Regresar
if($boton=="Regresar"){
  // Enlaza con la Pagina de Menu.php en caso de Existir
  echo "<script>window.location='menu.php'</script>";

}
*/



?>
