<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Consultas</title>
  </head>
  <body>
    <nav class="grey lighten-1 target">
       <div class="nav-wrapper container">
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
         <ul>
             <li><a href="#" class="brand-logo black-text">Pechinchar</a></li>
         </ul>

         <ul id="nav-mobile" class="right left hide-on-med-and-down">
           <li><a href="#" class="black-text">Login/Registre-se</a></li>
           <li><a href="#"><i class="material-icons black-text">shopping_cart</i></a></li>
         </ul>
       </div>
     </nav>
  @yield('content')
  </body>
</html>
