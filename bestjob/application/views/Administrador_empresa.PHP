<html lang="en">
<head>
  <title>ADMINISTRADOR_EMPRESA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  <h2>INDEX ADMINISTRADOR EMPRESA</h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Empresa</th>
        <th>Dedicacion</th>
        <th>Logo</th>
         <th> RNC</th>
        <th>Departamento_de_contacto</th>
        <TH>Accion</TH>

     </tr>
                            </thead>
                            <tbody>
                              
                               <?php
                                  foreach($oferta as $oferta_view)
                              
                                   {
        $deactivate = base_url("publicarempleo_view.php?/oferta_view/desativar/?id={$oferta_view->Idoferta_view}");
        $delete =base_url("publicarempleo_view.php??/oferta_view/Eliminar/?id={$oferta_view->Idoferta_view}");




                                  echo "<tr>



                                  <td>{$oferta_view->Idempresa_view}</td>
                                  <td>{$oferta_view->Empresa}</td>
                                  <td>{$oferta_view->Dedicacion}</td>
                                  <td>{$oferta_view->Logo}</td>
                                  <td>{$oferta_view->RNC}</td>
                                  <td>{$oferta_view->Accion}</td>
                   <td><a href='{$deactivate}' class='btn btn-primary'>desativar </a>
                  <a href='{$delete}' onClick='return confirmar();' class='btn btn-danger'>Eliminar </a></td>


                                 
                                  </tr>";
                                }

                               ?>

                            </tbody>


                            </table>


</div>
<CENTER>
<a href="<?php echo base_url('Home/ayuda'); ?>">AYUDA</a>
    <br>
<a href="<?php echo base_url('Home/politica_privasidad'); ?>">POLITICA DE PRIVACIDAD</a>
</CENTER>
</HTML>