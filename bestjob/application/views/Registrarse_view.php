<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>Registro</title>
	<link rel="stylesheet" href="">
</head>
<body>
<div class="container">
<form action="Registrarse_view_submit" method="get" accept-charset="utf-8">
 

<div class="input input-group">

	
  <br>
  <br>
  <br>
  <br>
  <br>


    <h1>Registrate con BESTJOB</h1>

        <span align="righ">Los datos ingresados en este sistema seran registrado en archivo propiedad de BestJob, </span>

        <span> Una vez registre sus datos se asumira que esta de 
	       acuerdo con nuestra <a href="<?PHP echo base_url('Home/politica_privasidad'); ?>"> Politica de seguridad </a> </span>

              <h3>Si ya estas registrado utiliza <a href=""> el panel de control</a> </h3>
          <div class="box">

         <div class="row">
           <h2>Candidato</h2>
              <a href="<?php echo base_url('Registrarse/registro_candidato'); ?>">Registrar Curriculum</a> 
            </div>

           <div class="row">
           <h2>Empresa</h2>
            <a href=" <?php echo base_url('Registrarse/registro_Empresa');?>">Registrar empresa</a> 
              </div>
              </div>
              </body>
            <CENTER>
<a href="<?php echo base_url('Home/ayuda'); ?>">AYUDA</a>
    <br>
<a href="<?php echo base_url('Home/politica_privasidad'); ?>">POLITICA DE PRIVACIDAD</a>
</CENTER>
</form>
</html>
