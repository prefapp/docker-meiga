window.addEventListener("load", function(){

  var POSICIONES = [
    'esquerda',
    'agardar_esquerda',
    'dereita',
    'agardar_dereita',
    'baixar_dereita',
    'subir_esquerda',
    'agardar_esquerda',
    'dereita',
    'agardar_dereita',
  ];

  var i = 0;

  setInterval(function(){

    if(i >= POSICIONES.length){
      i=0;
    }

    moverMeiga(i++);  

  }, 10 * 1000);

  moverMeiga(i++);


  function moverMeiga(i){
  
    document.getElementById("meiga").className = 
  
      "avatar meiga " + POSICIONES[i];
  
  }
})
