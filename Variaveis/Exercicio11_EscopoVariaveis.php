<?php

function teste()
{
	global $message;
	$message = "carlos klei";
	echo $message;
}

teste();
echo $message;
