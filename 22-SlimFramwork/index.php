<?php 

require_once("vendor/autoload.php");
//Autoload do composer.


$app = new \Slim\Slim();

//Criando rotas.
$app->get('/', function () {
//rota para pasta principal, independente do index
//Rota que vai ser acessada pelo método get.
//por isso, usamos o método get do objeto Slim.
   
    echo json_encode(array(
    	'Data:' => Date("Y-m-d H:i:s")
    ));

});

$app->get('/hello/:name', function ($name) {
	//rota hello/ e algum nome. :name um parâmetro.
	
    echo "Hello, " . $name;
});
$app->run();

 ?>