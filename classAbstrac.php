<?php

abstract class Servicio{
    abstract public function saludar($nombre);

  
    public function carta($nombre, $almuerzo){
      echo $this->saludar($nombre);
      echo "le puedo ofrecer: <br>";

      foreach ($almuerzo as $key => $value) {
          # code...
          echo $key." : ".$value."<br>";
      }
    }
}

class Mesero extends Servicio{
  public function saludar($nombre){
   return "bienvenido senor(a) :".$nombre."<br>";
  }
}

$meseroUno=new Mesero();

$nombrePerson="Julian Andres";
$almuerzo=array(
    "sopa"=>"maiz",
    "seco"=>"cane res, frijol, ensalada",
    "jugo"=>"chontaduro"
);

$meseroUno->carta($nombrePerson,$almuerzo);
$meseroUno->walk();

?>