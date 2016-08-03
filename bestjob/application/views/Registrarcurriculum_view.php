<!DOCTYPE html>
<html>
<head>
 
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
     

  <title>Registro Candidato</title>
 
<link rel="stylesheet" href="">
</head>
<body>
<form  method="post" action="<?php echo base_url('Candidato/registrarse') ?>">
 <h1 class="text-hide">Registrar Curriculum</h1>
<div class="row">
<table width="700px">
<tr>
 <br>
 <br>
 <br>

 <br>
 <br>
 <br>
 <br>

   <div class="row">
       <div  class="form-group">
       <td>
        <label for="email" class="form-control">Dirección de E-mail: *</label>
       </td>
       <td>
        <input type="email" class="form-control" name="email" maxlength="50" size="25">
      </td>
     </div>
    </div>
</tr>

<tr>
<div class="row">
<div class="form-group">
   <td>
     <label for="clave" class="form-control">Clave: *</label>
  </td>
     <td>
       <input type="password" name="clave" maxlength="50" size="25">

     </td>
  </div>
  </div>
  </div>
</tr>

<tr>
   <div class="form-group"><td>
       <label for="first_name" class="form-control">Nombre: *</label>
</td>
    <td>
        <input type="text" name="first_name" maxlength="50" size="25">
    </td>
</div>
</tr>

<tr>
   <div class="form-group">
<td >
    <label for="last_name" class="form-control">Apellido: *</label>
</td>
<td>
    <input type="text" name="last_name" maxlength="50" size="25">
</td>
</div>
</tr>

<tr>
       <div class="form-group">
     <td>
          <label for="cedula" class="form-control">Cedula: </label>
      </td>
<td>
       <input type="number" name="cedula" maxlength="80" size="12">
</td>
</div>
</tr>

<tr>
<div class="form-group">
    <td>
        <label for="telephone" class="form-control">Número de teléfono: </label>
     </td>
     <td>
      <input type="number" name="telephone" maxlength="80" size="12">
     </td>
</div>
</tr>

<tr>
<div class="row">
    <div class="form-group">
<td>
 <label for="sexo">Sexo: </label>
        <label class="c-input c-radio">
          <input value="F" name="sexo" type="radio">
          <span class="c-indicator"></span>
          F
        </label>
        <label class="c-input c-radio">
          <input  name="sexo" type="radio" value="M">
          <span class="c-indicator"></span>
          M
        </label>
    </td>
    </div>
   </div>
  </tr>

<tr>
<div class="row">
  <div class="form-group">
<td>
   <label class="form-control" for="foto">Foto:</label>
</td>
</div>
</div>
<td>
   <input type="image" name="foto" maxlength="25" size="40">
</td>
</tr>
<tr>
<div class="form-group">
<td>
<label for="direccion" class="form-control-label">Direccio Fisica:</label>
</td>
<td>
<input type="text" name="direccion" maxlength="25" size="40">
</td>
</div>
</tr>


<tr>
<div class="form-group">
<td>
<label for="ciudad" class="form-control-label">Ciudad:</label>
</td>
<td>
<input type="text" name="ciudad" maxlength="25" size="40">
</td>
</div>
</tr>

<tr>
<div class="form-group">
<td>
<label for="fechadenacimiento" class="form-control-label">Fecha de nacimiento:*</label>
</td>
<td>
<input type="date" name="fechadenacimiento" maxlength="25" size="40">
</td>
</div>
</tr>

<div class="row">
 <div class="input-field col s5">
<select class="browser-primary" id="nacionalidad" name="nacionalidad" placeholder="Selecione su nacionalidad">
       <option value="" id="nacionalidad"></option>
       <option value="Dominicana">Dominicana</option>
       <option value="Portugues">Portugues</option>
           <option value="Brazileño">Brazileño</option>
           <option value="Arabe">Arabe</option>
           <option value="Estados Unidense">Estados Unidensee</option>
           <option value="Rusia">Rusa</option>
           <option value="Aleman">Aleman</option>
           <option value="Frances">Frances</option>
           <option value="Italiano">Italiana</option>
           <option value="Japones">Japones</option>
           <option value="Holandez">Holandanse</option>
           <option value="China">China</option>
           <option value="Puerto Rico">porto riqueño</option>
           <option value="Otros">Otros</option>
       </select>
       </div>
       </div>

<tr>
<div class="form-group">
<td >
<label for="nacionalidad" class="form-control-label">Nacionalidad: *</label>
</td>
<td>
<input type="text" name="nacionalidad" maxlength="50" size="25">
</td>
</div>
</tr>


<tr>
<div class="form-group">
  <td>
    <label>Nivel Academico</label>
  </td>
  <td>
<select id="nivelacademico" class="form-control" name="nivelacademico">
     <option value="" selected="" disabled="">Nivel Academico</option>
     <option>Doctorado</option>
     <option>Maestria</option>
     <option>Licenciad@</option>
     <option>Bachiller</option>
     <option>Basico</option>
   </select>
   </td>
   </div>
</tr>

<tr>
<div class="row">
<div class="form-group">
<td>
   <label for="sexo" class="form-control">Estado Civil: *</label><br />
</td>
<td>
  <input type="radio" name="gender" value="casado"> Casad@
  <input type="radio" name="gender" value="soltero"> sorter@
  <input type="radio" name="gender" value="unionlibre"> Union Libre<br>
  </td>
</div>
</div>
</tr>

<tr>

<div class="row">
<div class="form-group">
<td>
  <label for="sexo" class="form-control">Esta laborando</label><br />
</td>
<td>
    <div class="form-control">
      <input type="radio" name="gender" value="si"> Si
      <input type="radio" name="gender" value="no"> No<br>
    </div>   
</td>    
</div>
</div>
</tr>

<tr>
<div class="form-group">
<td>
<label for="curso" class="form-control-label">Cursos Realizado: *</label>
</td>
<td>
<textarea name="curso" maxlength="500" cols="30" rows="5"></textarea>
</td>
</div>
</tr>

<tr>
<div class="form-group">
   <td>
        <label for="experiencialaborar" class="form-control-label">Experiencia Laboral: *</label>
   </td>
    <td>
        <textarea name="experiencialaboral" maxlength="500" cols="30" rows="5"></textarea>
  </td>
</div>
</tr>

  <div class="form-group">
         <td colspan="2" style="text-align:right">
           <button class="btn btn-success" type="submit" value="Enviar">Enviar</button>
        </td>
  </div>

</div>
</form>
</body>
<CENTER>
<a href>AYUDA</a>
    <br>
<a href>POLITICA DE PRIVACIDAD</a>
</CENTER>
</html>
