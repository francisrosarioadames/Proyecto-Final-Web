<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inicio Session</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
      <link rel="stylesheet" href="<?php echo base_url('flat-ui.min.css'); ?>">
      <link rel ="stylesheet" href ="<?php echo base_url('css/bootstrap-theme.min.css');?>">

  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
</head>
<body>

<div class="container">
<form action="" method="POST">
      <div class="col-md-6">
            
                <!-- <li>
                    <a href="#login" class="active">Login</a>
                    <h1>Login</h1>
                </li>
                -->

            <div>
              <div class="form-comtrol">
                 <div class="row">
                    <div class="form-group input-group">
                          <span class="input-group-addon">Email:</span>
                          <input class="input r4 wide mb16 mt8 username" type="email" placeholder="Escriba su Email" value="" name="Email" id="username" style="display: block;">
                    </div>
                    <div class="form-group input-group">
                          <span class="input-group-addon">Clave:</span>
                          <input class="input r4 wide mb16 mt8 password" type="password" placeholder="Escriba su clave" value="" id="Clave"   name="Clave" onkeypress="checkCaps(event)" autocomplete="off" />
                    </div>
                            
                     <div class="text-center">
                             <button class="btn btn-success" type="submit" value="">Iniciar Seccion</button>
                     </div>
               
                 </div>
              </div>
            </div>
      </div>
            
           
           
            <!--/#register.form-action-->
            <div id="reset" class="form-action hide">
                <h1>Reset Password</h1>
                <p>
                    Para restablecer su contraseña, introduzca su correo electrónico y su cumpleaños
                    y te enviaremos un enlace para restablecer su contraseña
                </p>
                <form>
                    <ul>
                        <li>
                            <input type="text" placeholder="Email" />
                        </li>
                        <li>
                            <input type="text" placeholder="Birthday" />
                        </li>
                        <li>
                            <input type="submit" value="Send" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#register.form-action-->
        </div>
        </form>
    </div>
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</body>
<CENTER>
<a href>AYUDA</a>
    
<a href>POLITICA DE PRIVACIDAD</a>
</CENTER>
</html>