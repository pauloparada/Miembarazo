var myapp = angular.module('myapp', ["ngRoute"]);
 
myapp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when("/", {
        templateUrl: 'pages/inicio.html'
    
    }).when("/inicio",{
        templateUrl: 'pages/inicio.html'
     
    }).when("/login",{
        templateUrl: 'pages/login.html'
        
    }).when("/inscribase",{
        templateUrl: 'pages/inscribase.html'
     
    }).when("/calendario",{
        templateUrl: 'pages/calendario.html'
     
    }).when("/videos",{
        templateUrl: 'pages/videos.html'
      
    }).when("/chat",{
        templateUrl: 'pages/chat.html'
     
    }).when("/articulos",{
        templateUrl: 'pages/articulos.html'
      
    }).when("/misfotos",{
        templateUrl: 'pages/misfotos.html'
      
    }).when("/perfil",{
        templateUrl: 'pages/perfil.html'
      
    }).when("/calculadoras",{
        templateUrl: 'pages/calculadoras.html'
      
    }).when("/cursos",{
        templateUrl: 'pages/cursos.html'
      
    }).when("/cercademi",{
        templateUrl: 'pages/cercademi.html'
    
    }).when("/terminosycondiciones",{
        templateUrl: 'pages/terminosycondiciones.html'
    
    }).when("/admin",{
        templateUrl: 'pages/admin.html'
    });
}]);
 
 /*escrip para el menu aside en el index*/

    $(document).ready(function(){
      $("#abrenav").click(function(){
        $("#menunav").animate({right: ($(window).width() - $('#menunav').outerWidth())/120,});
      });
    });

    $(document).ready(function(){
      $("#cierranav").click(function(){
        $("#menunav").animate({right:'-103%'});
      });
    });
/*--------------------------------------*/
