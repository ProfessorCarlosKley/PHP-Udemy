<?php
//GERANDO ARRAY A PARTIR DO JSON
$json = '
[{"nome":"CARLOS","idade":40},{"nome":"KLEY","idade":44},{"nome":"CARVALHO","idade":32}]';

$data = json_decode($json, true);
//true para forçar a criação do array, caso contrário ele transforma em objetos.
var_dump($data);
