<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Ofetas</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
</head>
<body>
<div class="container">
<form action="<?php echo base_url('Empresa/Publicar_Empleos'); ?>" method="POST" accept-charset="utf-8">
 

<br>
<br>
<br>
<br>
     <h2 class="intro-text text-center">
     <strong>PUBLICAR EMPLEOS</strong>
     </h2>
	<br>
	<br>
<tr>
   <td>
      <label for="first_name">Nombre de Puesto: *</label> 
  </td>
 <td>
     <input type="text" id="first_name" name="Puesto" maxlength="50" size="25">
 </td>
</tr>
<br />

<tr>
  <td >
     <label for="descripcion">Descripcion: *</label>
  </td>
  <td>
    <input type="text" id="descripcion" name="Descripcion" maxlength="50" size="25">
  </td>
</tr>

<br/>

<tr>
<label>Nivel Academico</label>
<td>
<select id="nivelacademico" class="form-control" name="Nivel_Academico">
		<option value="" selected="" disabled="">Nivel Academico</option>
		<option>Doctorado</option>
		<option>Maestria</option>
		<option>Licenciad@</option>
    <option>Tecnologo</option>
		<option>Bachiller</option>
		<option>Basico</option>

</select>
</td>
</tr>
<br />

<tr>
<td>
<label for="edadmaxima" class="form-control-label">Edad Maxima:</label>
</td>
<td>
<input type="text" id="edadmaxima" name="Edad_Maxima" maxlength="25" size="40">
</td>
</tr>
<br />
<tr>
<td>
<label for="Horario" class="form-control-label">Horario:</label>
</td>
<td>
<input type="text" id="Horario" name="Horario" maxlength="25" size="40">
</td>
</tr>
<br />

<tr>
<td>
<label for="Salario" class="form-control-label">Salario:</label>
</td>
<td>
<input type="number" id="Salario" name="salario" maxlength="25" size="40">
</td>
</tr>
<br />


<tr>
<td>
<label for="experiencialaboral" class="form-control-label">Experiencia Laboral: *</label>
</td>
<br/>
<td>
<textarea id="experiencialaboral" name="Experiencia_laboral" maxlength="500" cols="30" rows="5"></textarea>
</td>
</tr>
<br />

<div class="rows">
     <div class="form-control">
 <tr>
   <td>
     <label for="comentario" class="form-control-label">Comentario: *</label>
   </td>
   <br />
   <td>
     <textarea id="comentario" name="Comentario" maxlength="500" cols="30" rows="5"></textarea>
   </td>
 </tr>
   </div>
</div>
<br />

    <div class="modal-footer">
       <td colspan="2" style="text-align:right">
          <button type="submit" value="Enviar">Enviar</button> 
       </td>
   
    </div>

  <br />

</body>
</table>
</form>
</div>
<br>
<br>
<br>

<CENTER>
<a href="<?php echo base_url('Home/ayuda'); ?>">AYUDA</a>
    <br>
<a href="<?php echo base_url('Home/politica_privasidad'); ?>">POLITICA DE PRIVACIDAD</a>
</CENTER>
</html>
