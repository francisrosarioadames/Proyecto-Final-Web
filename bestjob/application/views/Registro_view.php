

<!Doctype html>
<html>
<head>
       <title> registro de Usuario </title>
       <link rel = "stylesheet" href ="css/bootstrap.min.css"/>
	   <link rel = "stylesheet" href ="css/bootstrap-theme.min.css"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
    <body>
      <div class="container"> 
        <form action="<?php echo base_url('Home/guardando'); ?>" method="POST" accept-charset="utf-8">
         <br>
         <br>
         <br>
            <div class="row">  
            <div class="col-ms-5">
			<center> <h2> <b> Registrar Curriculum</b> </h2> </center>
			  
          </div>
        
<br><br><br>


         <div class="col-xs-4">
                    <b> Nombre(s) : </b>
                    <input  autofocus type="text" name="Nombre" required="required" placeholder=" Introduzca su(s) nombre(s)" class="form-control" required title="Solo letras" pattern="^[a-zA-Z_áéíóúñ\s]*$" value=""/>
         </div>
       

                  <div class="col-xs-4">
                    <b>Apellido(s): <b>
                    <input type="text" name="Apellido" required="required" placeholder=" Indroduzca su(s)apellido(s)" class="form-control"  required title="Solo letras" pattern="^[a-zA-Z_áéíóúñ\s]*$" value=""/>
                  </div>
                
                 <br>
                   <br>
				     <br>
				   
                  <div class="col-xs-4">
                    <b> Email: </b>
                    <input type="text"  class="form-control" required="requiere" placeholder="Introduzca su email" name="Email" placeholder="ejemplo07@hotmail.com "/>
                  </div>   

                   <div class="col-xs-4">
                    <label class="active" for="Clave">Clave: </label>
                    <input type="password" id="Clave" name="Clave"required="required" class="form-control" placeholder="Claves de seguridad"/>
                    </div>
					
					
					<br>
					 <br>
					   <br>
					
					<div class="col-xs-4">
                    <b>Direccion: </b>
                    <input type="text" name="Direccion"required="required" class="form-control" placeholder="Direccion de su casa"/>
                    </div> 
					
					
					
					<div class="col-xs-4">
                    <b>C&eacute;dula: </b>
                    <input type="number" pattern="\S{11,11}" required="required" name="Cedula" maxlength="11"   class="form-control" placeholder="Introduzca la C&eacute;dula"  value=""/>
                  </div>   
				  
					<br>
					  <br>
					    <br>
					
					<div class="col-xs-4">
                    <b>Fecha de Nacimiento: </b>
                    <input type="date"  required="required" name="Fecha_de_nacimiento" class="form-control" placeholder="Ingrese su fecha de nacimiento "  value=""/>
                    </div> 
					
					
					
					<div class="col-xs-4">
                    <b>Estado Civil: </b>
                    <input type="text"  name="Estado_civil" class="form-control" required="required"  placeholder="cual es su estado civil?" value=""/>
                    </div> 
				  <br>
				    <br>
				      <br>

            
                
                      
                        
                      <div class="col-xs-4">
                       
                         <b>Foto</b>
                          <input class="form-control" type="file" name="Foto" value="">
                        <!-- <input type="file" id="foto" name="foto" maxlength="25" value="Archivo" size="40">--> 
                        </div>
                     
                               
                         
              
					
                    <div class="col-xs-4">
                      <b>Sexo:</b>
                    <select class="form-control" name="Sexo">
                    <option value="" disabled selected>seleccionar</option> 
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    </select>
                    </div> 
                    <br>
              <br>
              <br>
              <br>
					
					   <div class="col-xs-4">
                <label class="active" >Ciudad:</label><br>
                <select class="form-control" name="Ciudad">
                <option value="" disabled selected>seleccionar</option> 
                <option value="Santo Domingo">Santo Domingo</option>
                <option value="Puerto Ricos">Puerto Ricos</option>
                <option value="Estado unidos">Estado unidos</option>
                <option value="Mexico">Mexico</option>
                <option value="Cuba">Cuba</option>
                <option value="Italia">Italia</option>
                <option value=" Francia"> Francia</option>
                <option value="Espana">Espana</option>
                <option value="Venezuela">Venezuela</option>
                 <option value="Chile">Chile</option>
                <option value="Ecuador">Ecuador</option>
                </select>
            </div>
				
			
				 
			<div class="col-xs-4">
           <label class="active" >Nacionalidad:</label><br>
           <select class="form-control" id="nacionalidad" name="Nacionalidad" placeholder="">
           <option value="" disabled selected>Selecione su nacionalidad</option>
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
                    
            <br>
            <br>
            <br>

<div class="col-xs-4">
		   <tr>
         <label class="active" >Nivel Academico:</label><br>
         <select id="nivelacademico" class="form-control" name="Nivel_academico">
         <option value="" selected="" disabled="">Seleccione su Nivel Academico</option>
         <option>Doctorado</option>
         <option>Maestria</option>
         <option>Licenciad@</option>
         <option>Bachiller</option>
         <option>Basico</option>
         </select>
       </tr>
</div>
					
					
			
				   
					       <div class="col-xs-4">
					          <br>
                    <h4><b> ** Esta Laborando?: </b> </h4>
                    <input type="radio" name="Esta_laborando"  value="si"> Si
					          &nbsp <input type="radio" name="Esta_laborando"    value="no"> No
                 </div>
					
			</div>         
          </div> 
		        <br>
            <br> 
            <br>
            <div class="form-group-center">
               <div class="col-md-10 col-md-offset-2">
			              <button type="Submit" class="btn btn-primary">Guardar</button>
                    <a href="<?php echo base_url('Home/registrarse'); ?>" class="btn btn-default">Cancelar</a>

                  </div>
               </div>                            
            </div> 
                    </div>

                  </div>
              </div>
           
          </div>
       </form>
    </div>
</body>
<br>
<br>
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