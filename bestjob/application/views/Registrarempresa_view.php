
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<br />
<br />
<br />
<div class="container">
<form  method="post" action="action="<?php echo base_url('Home/guardando'); ?>"">

<div class="row">  
 <div class="col-ms-5">
 <h2> <center> <strong align="center">REGISTRA TU EMPRESA</strong></center> </h2>

<br><br><br>

<div class="form-group">
<div class="col-sx-6">
<label for="email">Dirección de E-mail: *</label>
<input type="text" class="form-control" id="email" required="required" placeholder=" Introduzca su(s) Email(s) correctamente" name="Email" maxlength="80" size="35">
</div>
</div>



<div class="col-sx-6">
<label for="clave">Clave: *</label>
<input type="password" id="clave" class="form-control" required="required" placeholder=" Introduzca su Clave" name="Clave" maxlength="80" size="35">
</div>


<div class="col-sx-6">
<label for="nombre">Nombre: *</label>
<input type="text" id="nombre" class="form-control" required="required" placeholder=" Introduzca su(s) nombre(s)" name="Nombre" maxlength="50" size="25">
</div>

<div class="col-sx-6">
<label for="RNC">RNC: *</label>
<input type="number" class="form-control" required="required" placeholder=" Introduzca su RNC" name="Rnc" maxlength="50" size="25">
</div>


<div class="col-sx-6">
<label for="cedula">A que se dedica: *</label>
<input type="text" id="cedula" class="form-control" name="Dedicacion" placeholder="Introduzca su Cedula" maxlength="80" size="12">
</div>


<div class="col-sx-6">
<label for="telephone">Número de teléfono: *</label>
<input type="number" id="telephone" class="form-control" required="required" placeholder=" Introduzca su(s) Telefono(s)" name="Telefono_Contacto" maxlength="25" size="15">
</div>


<div class="col-sx-6">
<label for="logo">Logo:</label>
<input class="form-control" id="logo" type="file" name="Logo" value="">
<!-- <input type="imag" class="form-control" name="logo" maxlength="25" size="40"> -->
</div>


<div class="col-sx-6">
<label for="direccion">Direccio Fisica:</label>
<input type="text" id="direccion" class="form-control" placeholder="Ubicacion" name="Direccion" maxlength="25" size="40">
</div>



<div class="col-sx-6">
<label for="ciudad">Ciudad:*</label>
<input type="text" id="ciudad" class="form-control" name="Ciudad" placeholder="Ciudad" maxlength="25" size="40">
</div>


<div class="col-sx-6">
<label for="pais">Pais:*</label>
<input type="text" id="pais" class="form-control" placeholder="Escriba su Pais" name="Pais" maxlength="25" size="40">
</div>


<div class="col-sx-6">
<label for="nombrecontacto">Nombre de la persona de contacto: *</label>
<input type="text" id="nombrecontacto" class="form-control" required="required" placeholder=" Introduzca Nombre persona Contacto" name="Nombre_persona_contacto" maxlength="50" size="25">
</div>


<div class="col-sx-6">
<label for="departamento"> Departamento de contacto: *</label>
<input type="text" id="departamento" class="form-control" name="Departamento_Contacto" maxlength="50" size="25">
</div>


<div class="col-sx-6">
<label for="emailcontacto">Email de contacto: *</label>
<input type="email" id="emailcontacto" required="required" class="form-control" name="Email_Contacto" maxlength="80" size="35">
</div>

<div class="col-sx-6">
      <div class="form-group">
         <td colspan="2" style="text-align:right">
           <button class="btn btn-success" type="submit" value="Registrar">Registrar</button>
           <a href="<?php echo base_url('Home/registrarse'); ?>" class="btn btn-default">Cancelar</a>
        </td>
  </div>
  </div>

</table>
</div>
</form>

</body>
<br>
<br>
<br>
<br>
<br>
<br>
<CENTER>
<a href="<?php echo base_url('Home/ayuda'); ?>">AYUDA</a>
    <br>
<a href="<?php echo base_url('Home/politica_privasidad'); ?>">POLITICA DE PRIVACIDAD</a>
</CENTER>
</html>


