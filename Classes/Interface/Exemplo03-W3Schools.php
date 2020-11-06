<!DOCTYPE html>
<html>
<body>

<?php
// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " O gato mia! <Br> ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " O cachorro late! <br>";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " O rato range! ";
  }
}

// Criando a lista de animais (objetos).
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
//Array de objetos.
$animals = array($cat, $dog, $mouse);

foreach($animals as $animal) {
    //Para cada objeto, cria uma variável do tipo objeto e acessa o método 
    //makeSound() de cada um deles.
  $animal->makeSound();
}

?> 
 <!-- Exemplo do site https://www.w3schools.com/php/php_oop_interfaces.asp -->
</body>
</html>
