<?php   
session_start();
if($_SESSION['logueado']){
  header('Location: admin.php');
}
else {
?>

<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="res/icon/ios/icon.png"> 

<!-- Android -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="res/icon/ios/icon.png"> 
<!-- iPhone 3, 3Gs -->
<link rel="apple-touch-startup-image" href="res/screen/ios/screen-iphone-portrait.png" 			media="screen and (max-device-width: 320px)" /> 
<!-- Android -->
<link rel="apple-touch-startup-image" href="res/screen/ios/screen-iphone-portrait.png"           media="screen and (max-device-width: 320px)" /> 
<!-- iPhone 4 -->
<link rel="apple-touch-startup-image" href="res/screen/ios/screen-iphone-portrait.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<!-- iPhone 5 -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="res/screen/ios/screen-iphone-portrait-2x.png" />

<!-- Define app icon for each platform. This is a relative path to config.xml.
        For e.g. if you place an icon.png inside res folder, you should modify the
        src in the following setting to "res/icon.png" -->
    <icon src="res/icon/ios/icon.png" />
    <icon src="res/icon/android/icon-36-ldpi.png"   gap:platform="android"    gap:qualifier="ldpi" />
    <icon src="res/icon/android/icon-48-mdpi.png"   gap:platform="android"    gap:qualifier="mdpi" />
    <icon src="res/icon/android/icon-72-hdpi.png"   gap:platform="android"    gap:qualifier="hdpi" />
    <icon src="res/icon/android/icon-96-xhdpi.png"  gap:platform="android"    gap:qualifier="xhdpi" />
    <icon src="images/icon-80.png"     gap:platform="blackberry" />
    <icon src="images/icon-80.png"     gap:platform="blackberry" gap:state="hover"/>
    <icon src="res/icon/ios/icon-57.png"            gap:platform="ios"        width="57" height="57" />
    <icon src="res/icon/ios/icon-72.png"            gap:platform="ios"        width="72" height="72" />
    <icon src="res/icon/ios/icon-57-2x.png"         gap:platform="ios"        width="114" height="114" />
    <icon src="res/icon/ios/icon-72-2x.png"         gap:platform="ios"        width="144" height="144" />
    <icon src="res/icon/windows-phone/icon-48.png"          gap:platform="webos" />
    <icon src="res/icon/windows-phone/icon-48.png"  gap:platform="winphone" />
    <icon src="res/icon/windows-phone/icon-173.png" gap:platform="winphone"   gap:role="background" />

    <!-- Define app splash screen for each platform. -->
    <gap:splash src="res/screen/android/screen-ldpi-portrait.png"       gap:platform="android" gap:qualifier="port-ldpi" />
    <gap:splash src="res/screen/android/screen-mdpi-portrait.png"       gap:platform="android" gap:qualifier="port-mdpi" />
    <gap:splash src="res/screen/android/screen-hdpi-portrait.png"       gap:platform="android" gap:qualifier="port-hdpi" />
    <gap:splash src="res/screen/android/screen-xhdpi-portrait.png"      gap:platform="android" gap:qualifier="port-xhdpi" />
    <gap:splash src="images/screen-225.png"              gap:platform="blackberry" />
    <gap:splash src="res/screen/ios/screen-iphone-portrait.png"         gap:platform="ios"     width="320" height="480" />
    <gap:splash src="res/screen/ios/screen-iphone-portrait-2x.png"      gap:platform="ios"     width="640" height="960" />
    <gap:splash src="res/screen/ios/screen-ipad-portrait.png" gap:platform="ios"     width="640" height="1136" />
    <gap:splash src="res/screen/ios/screen-ipad-portrait.png"           gap:platform="ios"     width="768" height="1024" />
    <gap:splash src="res/screen/ios/screen-ipad-landscape.png"          gap:platform="ios"     width="1024" height="768" />
    <gap:splash src="images/screen-portrait.jpg"      gap:platform="winphone" />



<!-- Page Title -->
<title>Mi Embarazo - Login Administrador</title>

<!-- Stylesheet Load -->
<link href="styles/style.css"				rel="stylesheet" type="text/css">
<link href="styles/framework-style.css" 	rel="stylesheet" type="text/css">
<link href="styles/framework.css" 			rel="stylesheet" type="text/css">
<link href="styles/bxslider.css"			rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"			rel="stylesheet" type="text/css">
<link href="styles/icons.css"				rel="stylesheet" type="text/css">
<link href="styles/retina.css" 				rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" />
<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/washington.css">
<link rel="stylesheet" type="text/css" href="css/framework2.css">
<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />



<!--Page Scripts Load -->
<script src="scripts/jquery.min.js"		type="text/javascript"></script>	
<script src="scripts/hammer.js"			type="text/javascript"></script>	
<script src="scripts/jquery-ui-min.js"  type="text/javascript"></script>
<script src="scripts/subscribe.js"		type="text/javascript"></script>
<script src="scripts/contact.js"		type="text/javascript"></script>
<script src="scripts/jquery.swipebox.js" type="text/javascript"></script>
<script src="scripts/bxslider.js"		type="text/javascript"></script>
<script src="scripts/colorbox.js"		type="text/javascript"></script>
<script src="scripts/retina.js"			type="text/javascript"></script>
<script src="scripts/custom.js"			type="text/javascript"></script>
<script src="scripts/framework.js"		type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8" src="cordova.js"></script>

</head>
<body>

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			Cargando el Contenido...
            <em>La carga del contenido depende de su velocidad de conexion!</em>
        </p>
    </div>
</div>

<div class="content">

	<!--<div class="landing-logo">
    	<img class="replace-2x" src="images/logo-miembarazomid.png" alt="img"></div>
    </div>-->
    
<div class="w-nav navbar" data-collapse="all" data-animation="over-right" data-duration="400" data-contain="1" data-easing="ease-out-quint" data-no-scroll="1">
        <div class="w-container">
          <nav class="w-nav-menu nav-menu" role="navigation">
            <div class="nav-menu-header">
              <div class="logo"><img src="images/logo.png"></div>
              <div class="slogan"></div>
            </div>
            <a class="w-clearfix w-inline-block nav-menu-link" href="index.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-home-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Inicio</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="login.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-download-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Login</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="signup.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-cloud-upload-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Inscribase</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="calendario.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-list-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">calendario</div>
              
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="videos.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-albums-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Videos</div>
              <div class="nav-menu-text-right">8</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="chat.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-chatboxes-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Chat</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="articulos.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-keypad-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Articulos</div>
              <div class="nav-menu-text-right">12</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="registro.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-paper-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Registro</div>
              <div class="nav-menu-text-right">14</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="perfil.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-compose-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">perfil</div>
              <div class="nav-menu-text-right">14</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="clases.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-person-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Clases</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="mapa.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-location-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Cerca de Mi</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="admin.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-gear-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Admin</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link last" href="terminos.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-bookmarks-outline"></div>
              </div>
              <div class="nav-menu-titles" style="color:#6E2CC7;">Terminos y Condiciones</div>
            </a>
            <div class="separator-bottom"></div>
            <div class="separator-bottom"></div>
            <div class="separator-bottom"></div>
          </nav>
    
          <div class="w-nav-button navbar-button left" id="menu-button" data-ix="hide-navbar-icons">
            <div class="navbar-button-icon home-icon">
              <div class="bar-home-icon"></div>
              <div class="bar-home-icon"></div>
              <div class="bar-home-icon"></div>
            </div>
          </div>
          
        </div>
      </div>

    <div class="welcome-text">
        <center><img src="images/logo-miembarazosmall.png"  style="margin-top:-60px;z-index: 1000;"alt="logo"></center>
    	<h3></h3>
        
    </div>

    <div class="navigation-icons" style="overflow: visible !important;height:520px;">   
            <center><h2>Ingrese su usuario y contraseña </h2> </center>
            <form action="autenticarse.php" method="POST">
              <label for="usr">Usuario:</label><input type="text" name="usr"/><br/>
              <label for="pwd">Password:</label><input type="password" name="pwd"/><br/>
              <input type="submit" value="Iniciar Sesion"/>
            </form>
    


    </div>
    	

    
    
    <div class="small-navigation-icons">
      <a href="index.html" class="small-nav-icon button-nav1"><img style="height:24px; width:24px; left:19%; top:19%;"src="images/icons/nav-button1.png"></a>
    	<a href="registro.html" class="small-nav-icon button-nav2"><img style="height:24px; width:24px; left:19%; top:19%;"src="images/icons/nav-button2.png"></a>
      <a href="ubicacion.html" class="small-nav-icon button-nav3"><img style="height:24px; width:24px; left:19%; top:19%;"src="images/icons/nav-button3.png"></a>
      <a href="chat.html" class="small-nav-icon button-nav4"><img style="height:24px; width:24px; left:19%; top:19%;"src="images/icons/nav-button4.png"></a>
        <div class="clear"></div>
    </div>
    
    <p class="landing-copyright copyright"></p>


</div>


  <script src="jquery.js"></script>
 
  <script type="text/javascript" src="js/framework.js"></script>
</body>
</html>


<?php   
}
?>




























