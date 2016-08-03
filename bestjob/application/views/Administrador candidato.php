<html lang="en">
<head>
  <title>ADMINISTRADOR_CANDIDATO</title>
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
  <h2>INDEX ADMINISTRADOR CANDIDATO</h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th> Nombre</th>
        <th>Apellidos</th>
        <th>Nacionalidad</th>
         <th> Foto</th>
        <th>Nivel_academico</th>
        <TH>Accion</TH>

      </tr>
    </thead>
    <tbody>
       <?php

                               foreach($candidato as $candidatos)
                              
                                   {
        $deactivate = base_url("candidato_view.php?/candidato_view/desativar/?id={$candidato_view->Idcandidato_view}");
        $delete =base_url("candidato_view.php?/candidato_view/Eliminar/?id={$candidato_view->Idcandidato_view}");




                                  echo "<tr>



                                  <td>{$candidatos->Idcandidato_view}</td>
                                  <td>{$candidatos->Nombre}</td>
                                  <td>{$candidatos->Apellido}</td>
                                  <td>{$candidatos->Nacionalidad}</td>
                                  <td>{$candidatos-> Foto}</td>
                                  <td>{$candidatos->Nivel_academico}</td>
                                  <td>{$candidatos->Accion}</td>
                                  <td><a href='{$deactivate}' class='btn btn-primary'>desativar </a>
                                  <a href='{$delete}' onClick='return confirmar();' class='btn btn-danger'>Eliminar </a></td>


                                 
                                  </tr>";
                                }

                               ?>

                            </tbody>


                            </table>
</div>



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