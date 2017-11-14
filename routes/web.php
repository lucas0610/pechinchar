<?php

Route::get('/', function() { //Função vai redirecionar para a rota /index
  return redirect('/index');
});

Route::view('/index', 'site.home.index');

Route::view('/consulta', 'site.painel.consulta');

Route::get('/contato', 'SiteController@contato');
