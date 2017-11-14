@extends('templates.template')
@section('content')
  <!--DIV PARA VERSÃO DESKTOP -->
  <div id="paral" class="parallax-container hide-on-med-and-down" >
    <div class="parallax">
      <img id="teste" class="responsive-img" src="img/teste.jpg">
    </div>
    <div class="caption center-align">
       <h1 class="white-text"><strong>ECONOMIZE TEMPO E DINHEIRO</strong></h1>
       <h5 class="white-text"> - Encontre os melhores produtos com os melhores preços - </h5>
       <a class="waves-effect waves btn ">CONSULTAR PRODUTOS</a>
     </div>
  </div>
  <!--DIV PARA VERSÃO MOBILE -->
    <div id="mobile" class="parallax-container hide-on-large-only">
        <div class="parallax">
            <img id="mobile-img" class="responsive-img" src="img/teste.jpg">
        </div>
          <div id="caption-mob" class="center-align">
             <h3 class="white-text"><strong>ECONOMIZE TEMPO E DINHEIRO</strong></h3>
             <h6 class="white-text"> - Encontre os melhores produtos com os melhores preços - </h6>
             <a class="waves-effect waves btn ">CONSULTAR PRODUTOS</a>
          </div>
    </div>
  <!--DIV PARA VERSÃO MOBILE -->
<div id="texto-1" class="center-align">
<h3>DESCUBRA ONDE É MAIS ECONÔMICO <br>FAZER SUAS COMPRAS SEM SAIR DE CASA!</h3>
</div>

<div id="carrosel" class="carousel">
  <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
  <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
  <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
  <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
  <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
</div>

@endsection
