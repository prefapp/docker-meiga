(function(){
  
  if(window.meiga_ajax) return;

  meiga_ajax = {};

  meiga_ajax.numVisitas = function(){

    return ejecutar('ajax.php?accion=num_visitas')
  }

  meiga_ajax.novaVisita = function(){

    return ejecutar('/ajax.php?accion=nova_visita');

  }

  meiga_ajax.reiniciaLua = function(){

    return ejecutar('/ajax.php?accion=reinicia_lua');

  }
 
  meiga_ajax.agrandaLua = function(){
  
    return ejecutar('/ajax.php?accion=agranda_lua');
  }

  meiga_ajax.tamLua = function(){

    return ejecutar('/ajax.php?accion=tam_lua');
  }

  function ejecutar(ruta){

    return fetch(ruta).then((res) => {
  
      return res.text();

    })
  
  }

}())
