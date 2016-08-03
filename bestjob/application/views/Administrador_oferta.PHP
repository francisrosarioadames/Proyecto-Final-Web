<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMINISTRADOR_OFERTA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <h2>INDEX ADMINISTRADOR OFERTA</h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Empresa</th>
        <th>Tipo de oferta</th>
        <th>Detalle</th>
         <th>Fecha de publicacion</th>
        <th>solicitudes enviada</th>
        <TH>Accion</TH>

      </tr>
    </thead>
    <tbody>
       <?php
                                  foreach($candidato as $candidato_view)
                              
                                   {
        $deactivate = base_url("candidato_view.php?/candidato_view/desativar/?id={$candidato_view->Idcandidato_view}");
        $delete =base_url("candidato_view.php?/candidato_view/Eliminar/?id={$candidato_view->Idcandidato_view}");




                                  echo "<tr>



                                  <td>{$oferta_view->Idcandidato_view}</td>
                                  <td>{$oferta_view->Nombre}</td>
                                  <td>{$oferta_view->Apellido}</td>
                                  <td>{$oferta_view->Nacionalidad}</td>
                                  <td>{$oferta_view->Foto}</td>
                                  <td>{$oferta_view->Nivel_academico}</td>
                                  <td>{$oferta_view->Accion}</td>
                   <td><a href='{$deactivate}' class='btn btn-primary'>desativar </a>
                  <a href='{$delete}' onClick='return confirmar();' class='btn btn-danger'>Eliminar </a></td>


                                 
                                  </tr>";
                                }

                               ?>


    </tbody>
  </table>
</div>

</body>
<CENTER>
<a href="<?php echo base_url('Home/ayuda'); ?>">AYUDA</a>
    <br>
<a href="<?php echo base_url('Home/politica_privasidad'); ?>">POLITICA DE PRIVACIDAD</a>
</CENTER>
</html>