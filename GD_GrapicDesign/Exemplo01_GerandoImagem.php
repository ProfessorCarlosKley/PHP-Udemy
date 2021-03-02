<?php 

header("content-type: image/png");

#Criando a imagem e definindo sua dimensões;
$image = imagecreate(256, 256);

#Definição das cores: A primeira definida é usada como background.
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

#Escrevendo na imagem:
imagestring($image, 5, 60, 120, "CARLOS KLEI", $red);
imagepng($image);
imagedestroy($image);
 ?>