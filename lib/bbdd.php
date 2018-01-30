<?php

 class BD {
  
   private $mysqli;

   public function __construct(){
     
    $this->mysqli = new mysqli($_ENV["MYSQL_HOST"], $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASSWORD"], $_ENV["MYSQL_DATABASE"]);

    if($this->mysqli->connect_errno){
        throw new Exception("Erro de conexión á base de datos: " . $this->mysqli->connect_error);
    }

   }

   public function iniciar(){

        if(!$this->existeTaboa("meiga")){

            printf("Creando tablita\n");

            $this->consulta("CREATE TABLE IF NOT EXISTS meiga (visitas INT, tam_lua INT);");
            $this->consulta("INSERT INTO meiga (visitas, tam_lua) VALUES(0, 0);");
        }
   }

   public function novaVisita(){

    $this->consulta("UPDATE meiga SET visitas = visitas + 1");

   }

   public function numeroVisitas(){


    $res = $this->mysqli->query("SELECT visitas FROM meiga");

    return $res->fetch_array(MYSQLI_NUM)[0];

   }

   public function tamLua(){

    $res = $this->mysqli->query("SELECT tam_lua FROM meiga");

    return $res->fetch_array(MYSQLI_NUM)[0];
    
   }

   public function agrandaLua(){

    $this->consulta("UPDATE meiga SET tam_lua = tam_lua + 1");

   }

   private function consulta($sql){

            $res = $this->mysqli->query($sql);

            if($res === TRUE){
                printf("$sql [ok]\n");
                return $res;
            }
            else{
                throw new Exception("Error en SQL: $sql  :" . $this->mysqli->connect_error);
            }
   }

   private function existeTaboa($taboa){
        $res = $this->mysqli->query("SHOW TABLES LIKE '$taboa'");
        return $res->num_rows == 1;
   }
 }



