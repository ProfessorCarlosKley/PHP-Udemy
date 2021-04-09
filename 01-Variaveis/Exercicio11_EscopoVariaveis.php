<?php

function teste()
{
	global $message;
	//global permite que incluisve a var definida dentro da função sej vista fora dela também.
	$message = "carlos klei";
	echo $message;
}

teste();
echo $message;
