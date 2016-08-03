<?php

$usuario=$_POST["Email"];
$password=$_POST["Clave"];


$Administrador = mysql_query("SELECT * FROM Administrador WHERE Administrador = '$Email' AND Clave = '$Clave'");
$Empresa = mysql_query("SELECT * FROM Empresa WHERE Empresa = '$Email' AND Clave = '$Clave'");
$Candidato = mysql_query("SELECT * FROM Candidato WHERE Candidato = '$Email' AND Clave = '$Clave'");



if(mysql_num_rows($Candidato) > 0) 
{
 
    session_start();




$_SESSION['Candidato']="$Email";

 header("Location: Candidato/Index_candidato.php");

  exit(); 
}



else if(mysql_num_rows($Empresa) > 0) 
{
    session_start();
    $_SESSION['Empresa']="$Email";
    header("Location: Empresa/Index_empresa.php");
    exit(); 
}
 

 else if(mysql_num_rows($administrador) > 0) 
{
    session_start();
    $_SESSION['Administrador']="$Email";
    header("Location: Administrador/Administrador_view.php");
    exit();
} 

else 
{
	 $mensajeaccesoincorrecto = "creo que se te olvido tu Email o clave";
   echo $mensajeaccesoincorrecto; 
}


session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['Candidato'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("location:../vista_role.php"); 
}





?>