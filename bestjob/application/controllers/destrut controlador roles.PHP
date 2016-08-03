<?php 
session_start();
 
if (!isset($_SESSION[Candidato])) 
{
    header("location:../index.php"); 
}
 

session_unset($_SESSION[Candidato]);
 
session_destroy();
 

header("location:../Home.php"); 




session_start();
 

if (!isset($_SESSION[Empresa])) 
{
    header("location:../Home..php"); 
}
 

session_unset($_SESSION[Empresa]);

session_destroy();
 

header("location:../Home.php"); 




session_start();
 
/* comprobamos que un usuario registrado es el que accede al archivo, 
sino no tendría sentido que pasara por este archivo */
if (!isset($_SESSION[Administrador])) 
{
    header("location:../Home..php"); 
}
 
/* usamos la función session_unset() para liberar la variable 
de sesión que se encuentra registrada */
session_unset($_SESSION[Administrador]);
 
// Destruye la información de la sesión
session_destroy();
 
//volvemos a la página principal
header("location:../Home.php"); 










?>