(function(){

  if(window.lua) return;

  window.lua = {};

  window.lua.instalar = function(){

    document.getElementById("alua").addEventListener("click", function(){

      meiga_ajax.agrandaLua().then(() => {

        return lua.setTam();

      });


    });

    return lua.setTam();
 
  }

  window.lua.setTam = function(){

    meiga_ajax.tamLua().then((t) => {

      t = parseInt(t);
  
      if(t == 0) return;

      if(t > 190) return meiga_ajax.reiniciaLua().then(() => {

        lua.setTam();

      })

      let s = document.getElementById("blua").style;
      let ss = document.getElementById("alua").style;

      s.boxShadow = `${15 + t}px 15px 0 white`;
      s.right = `${10 + (t * 0.05)}vw`;

      ss.right = `${10 + (t * 0.025)}vw`;

    })

  }



}())
