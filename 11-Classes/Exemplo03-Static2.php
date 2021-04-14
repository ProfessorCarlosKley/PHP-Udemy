<!DOCTYPE html>
<html>



<body>

<?php
class greeting {
  public static function welcome() {
    echo "Sejam bem vindos!";
  }
  public function __construct() {
    self::welcome();
    //self para acessar o método estático da mesma classe.
  }
}

new greeting();
/*
Uma classe pode ter métodos estáticos e não estáticos. Um método estático pode ser acessado a partir de um método na mesma classe usando a palavra-chave self e dois pontos duplos (: :):
*/
?>

</body>
</html>