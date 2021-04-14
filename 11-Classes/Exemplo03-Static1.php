<?php
//Static permite que chamemos um método ou atributo sem a necessidade de inestanciarmos o ojbeto.

class ClassName {
  public static function staticMethod() {
    echo "CARLOS KLEI CARVALHO DE MOURA";
  }
}

ClassName::staticMethod();
//A sintaxe para acessar um método estático é o uso de ::, também herdada do C/C++.

?>