<!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
     <link rel="stylesheet" href="/css/style.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <title>Pechinchar</title>
   </head>

   <body>
      @yield('content')
       <nav class="transparent target">
          <div class="nav-wrapper container">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul>
              <li><i class="material-icons black-text">shopping_basket</i></li>
              <li><a href="#" class="brand-logo black-text">Pechinchar</a></li>
            </ul>

            <ul id="nav-mobile" class="right left hide-on-med-and-down">
              <li><a href="#" class="black-text">Login/Registre-se</a></li>
              <li><a href="#"><i class="material-icons black-text">shopping_cart</i></a></li>
            </ul>
          </div>
        </nav>


          <div class="grey darken-1">
            <div class="row">
              <div class="col s4">
                <img id="carrinho" class="responsive-img" src="img/carrinho.png" alt="">
                <p class="white-text center-align">
                  <br> <strong>Compare, Consulte e Encontre </strong><br>
                    Consulte o preço médio de um produto <br>
                    e descubra por quanto ele está sendo vendido <br>
                    em outros supermercados da sua cidade. <br>
                </p>
              </div>

              <div class="col s4">
                <img id="sacola"  class="responsive-img" src="img/sacola.png" alt="">
                <p class="white-text center-align ">
                <br> <strong>Alerta de Promoções</strong><br>
                Fique por dentro de promoções e descontos <br>
                oferecidos por supermercados e econimize mais. <br>
                </p>
              </div>

                <div class="col s4">
                  <img id="cofre"  class="responsive-img" src="img/cofre.png" alt="">
                  <p class="white-text center-align">
                  <br><strong>Econimize Tempo  e Dinheiro</strong><br>
                  Descubra onde estão os melhores preços <br>
                  e simule toda montagem de suas compras <br>
                  em nosso sistema.
                  </p>
                </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div id="texto-2" class="center-align">
                <h2> <strong>CADASTRE - SE AGORA MESMO</strong></h2>
                <h5>Descubra com alguns cliques onde estão as melhores ofertas.</h5>
                <a class="waves-effect waves-light amber accent-4 btn">BUSCAR PRODUTOS</a>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="center-align">
                <h2> <strong>SAIBA MAIS</strong></h2>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col s6">
                <a href="#"><img src="img/sobre.png" alt=""></a>
              </div>
              <div class="col s6">
                <a href="#"><img src="img/contato.png" alt=""></a>
              </div>
            </div>
          </div>

        <footer class="page-footer amber accent-4">
         <div class="footer-copyright amber accent-4">
           <div class="container">
           © 2017 Copyright by Pechinchar
           <a class="grey-text text-lighten-4 right" href="#!"><img src="img/facebook.png" alt=""></a>
           <a class="grey-text text-lighten-4 right" href="#!"><img src="img/linkedin.png" alt=""></a>
           <a class="grey-text text-lighten-4 right" href="#!"><img src="img/instagram.png" alt=""></a>
           <a class="grey-text text-lighten-4 right" href="#!"><img src="img/twitter.png" alt=""></a>
           </div>
         </div>
       </footer>

     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.js"></script>

     <script>

       $(document).ready(function(){
         $('.target').pushpin({
           top: 0,
           bottom: 700,
           offset: 0
         });
       });

       $(document).ready(function(){
         $('.parallax').parallax();
       });

       $(document).ready(function(){
         $('.carousel').carousel();
       });
       $(document).ready(function(){
         $('.slider').slider();
       });
       $(document).ready(function(){
       $(".button-collapse").sideNav();
       });
     </script>
   </body>
 </html>
