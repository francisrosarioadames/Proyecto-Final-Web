<html>
<head>
<title>Registra tu Curriculum</title>

<h1>Registra tu Curriculum</h1>

</head>

<form name="frmContacto" method="post" action="sendbymail.php">
<table width="500px">
<tr>
<td>
<label for="email">Dirección de E-mail: *</label>
</td>
<td>
<input type="text" name="email" maxlength="80" size="35">
</td>
</tr>
<tr>
<td>
<label for="clave">Clave: *</label>
</td>
<td>
<input type="password" name="clave" maxlength="80" size="35">
</td>
</tr>
<tr>
<td>
<label for="first_name">Nombre: *</label>
</td>
<td>
<input type="text" name="first_name" maxlength="50" size="25">
</td>
</tr>
<tr>
<td >
<label for="last_name">Apellido: *</label>
</td>
<td>
<input type="text" name="last_name" maxlength="50" size="25">
</td>
</tr>
<tr>
<td>
<label for="cedula">Cedula: *</label>
</td>
<td>
<input type="number" name="cedula" maxlength="80" size="12">
</td>
</tr>
<tr>
<td>
<label for="telephone">Número de teléfono: *</label>
</td>
<td>
<input type="number" name="telephone" maxlength="25" size="15">
</td>
</tr>
<tr>
<td>
<form action="">
  <label for="sexo">Sexo: *</label>
  <br>
  <input type="radio" name="gender" value="male"> Masculino<br>
  <input type="radio" name="gender" value="female"> Femenino<br>
</form>
</tr>
</td>


<td>
<label for="foto">Foto:</label>
</td>
<td>
<input type="image" name="foto" maxlength="25" size="40">
</td>
</tr>

<td>
<label for="direccion">Direccio Fisica:</label>
</td>
<td>
<input type="text" name="direccion" maxlength="25" size="40">
</td>
</tr>

<td>
<label for="ciudad">Ciudad:</label>
</td>
<td>
<input type="text" name="ciudad" maxlength="25" size="40">
</td>
</tr>

<td>
<label for="fechadenacimiento">Fecha de nacimiento:*</label>
</td>
<td>
<input type="date" name="fechadenacimiento" maxlength="25" size="40">
</td>
</tr>

<tr>
<td>


<select id="nivelacademico" name="nivelacademico">
		<option value="" selected="" disabled="">Nivel Academico</option>
		<option>Doctorado</option>
		<option>Maestria</option>
		<option>Licencia@</option>
		<option>Bachiller</option>
		<option>Basico</option>

</td>
</tr>

<tr>
<td >
<label for="nacionalidad">Nacionalidad: *</label>
</td>
<td>
<input type="text" name="nacionalida" maxlength="50" size="25">
</td>
</tr>

<tr>
<td>
<form action="">
  <label for="sexo">Estado Civil: *</label>
  <br>
  <input type="radio" name="gender" value="casado"> Casad@<br>
  <input type="radio" name="gender" value="soltero"> sorter@<br>
   <input type="radio" name="gender" value="unionlibre"> Union Libre<br>
</form>
</tr>
</td>

<tr>
<td>
<form action="">
  <label for="sexo">Esta laborando *</label>
  <br>
  <input type="radio" name="gender" value="si"> Si<br>
  <input type="radio" name="gender" value="no"> No<br>
 
</form>
</tr>
</td>



<tr>
<td>
<label for="curso">Cursos Realizado: *</label>
</td>
<td>
<textarea name="curso" maxlength="500" cols="30" rows="5"></textarea>
</td>
</tr>

<tr>
<td>
<label for="experiencialaborar">Experiencia Laboral: *</label>
</td>
<td>
<textarea name="experiencialaboral" maxlength="500" cols="30" rows="5"></textarea>
</td>
</tr>



<tr>
<td colspan="2" style="text-align:right">
<input type="submit" value="Enviar">
</td>
</tr>
</table>
</form>