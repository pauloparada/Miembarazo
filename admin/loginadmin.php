<?php   
session_start();
if($_SESSION['logueado']){
  header('Location: admin.php');
}
else {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/framework.css">
  <link rel="stylesheet" type="text/css" href="../css/washington.css">
  <script src="js/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Montserrat:400,700"]
      }
    });
  </script>
  <script type="text/javascript" src="../js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../images/logoStandford32.ico">
  <link rel="apple-touch-icon" href="../images/logoStandford32.ico">

  <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <section class="w-section mobile-wrapper">

    <div class="page-content" id="main-stack" data-scroll="0">
      <div class="w-nav navbar"></div>
      <div class="body padding">
        <div class="logo"><img style="margin-left:30px;" src="../images/logo.png"></div>
        <div class="bottom-section padding">
          
          <div class="w-form">
            
            <form id="submit-form" action="autenticarse.php" method="POST">
              <div>
                <label class="label-form" for="usr">USUARIO</label>
                <input class="w-input input-form" id="email-field" type="text" name="usr" data-name="usr" required="required">
                <div class="separator-fields"></div>
              </div>
              <div>
                <label class="label-form" for="pwd">CONTRASEÑA</label>
                <input class="w-input input-form" id="email-field" type="text" name="pwd" data-name="pwd" required="required">
                 
                <div class="separator-button-input"></div>
              </div>
              <input class="w-button action-button" type="submit" value="Ingresar" data-wait="Please wait...">
             
            </form>


            <div class="w-form-done">
              <p>Gracias! Tu aplicacion fue recibida con exito!!</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Algo ha ido mal con el registro</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content loading-mask" id="new-stack">
      <div class="loading-icon">
        <div class="navbar-button-icon icon ion-load-d"></div>
      </div>
    </div>
    <div class="shadow-layer"></div>
  </section>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/framework.js"></script>
  <!--[if lte IE 9]><script src="js/placeholders.min.js"></script><![endif]-->
</body>
</html>

<?php   
}
?>
