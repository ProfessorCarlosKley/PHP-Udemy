<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

//Criando rotas.
$app->get('/', function () {
//rota para pasta principal, independente do index
   
    echo json_encode(array(
    	'Data:' => Date("Y-m-d H:i:s")
    ));

});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();

 ?>