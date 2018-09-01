<!DOCTYPE html>
<html>
  <head>
    <title>Inicio de sesion</title>
    <?php include "./class_lib/links.php"; ?>
  </head>
  <style type="text/css">
    
  .fondo{
        background-image: url("img_empresa/fondo_login.jpg");
        width: 100%;
        height: 100%;
        background-position: center;
}

  .logo{
        background-image: url("img_empresa/Logo.png");
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        size: 

  }
  .form{
    padding-top: 100px;
  }

  </style>
  <body>
    <div class="fondo">
      <div class="logo">
        <div class="form">
          <form action="valida_usr.php" method="post" class="AjaxForms MainLogin" data-type-form="login" autocomplete="off">
            
            <p class="text-center text-muted lead text-uppercase">Inicio de Sesión</p>
            <div class="form-group">
              <label class="control-label" for="UserName">Usuario</label>
              <input class="form-control " name="usuario" id="UserName" type="text" required="">
            </div>
            <div class="form-group">
              <label class="control-label" for="Pass">Contraseña</label>
              <input class="form-control " name="pass" id="Pass" type="password" required="">
            </div>
            <p class="text-center">
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>        
            </p>
          </form>
        </div>
      </div>
    </div>
    <div class="MsjAjaxForm"></div>
    <?php include "./class_lib/scripts.php"; ?>
  </body>
</html>
