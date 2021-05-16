<?php 
require_once("vendor/autoload.php");
// namespace
use Rain\Tpl; //A classe Rpl está dentro do namespace Rain

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
    //"debug"         => true, // set to false to improve the speed
);

Tpl::configure( $config );


// Add PathReplace plugin (necessary to load the CSS with path replace)
//Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );


// create the Tpl object
$tpl = new Tpl;

//name e version são os nomes das variáveis. Estão sendo usadas	 no index.html
//padrão: variáveo, valor.
$tpl->assign( "name", "CARVALHO DESENVOLVIMENTO" );
$tpl->assign( "version", PHP_VERSION);

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// Gerando o template (draw), buscando o template e gerando o resultado.
$tpl->draw( "index" );
//Como padrão já é html para esse template, não precisamos colocar.


 ?>
