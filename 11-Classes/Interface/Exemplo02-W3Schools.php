<!DOCTYPE html>
<html>
<body>

<?php
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Miau...";
  }
}

$animal = new Cat();//Objeto
$animal->makeSound();//Método do objeto.
?>
 <!-- Exemplo do site: https://www.w3schools.com/php/php_oop_interfaces.asp-->
</body>
</html>