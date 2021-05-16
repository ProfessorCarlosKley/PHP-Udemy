<?php 

header("content-type: image/png");
//header função usada para chamar uma imagem. header diz o tipo do arquivo.


#Criando a imagem (tela) e definindo suas dimensões em px.;
$image = imagecreate(256, 256);

#Criando paleta de cores: A primeira definida é usada como background.

//imagecolorallocate(image, red, green, blue) - A função.

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

#Escrevendo na imagem:
//imagestring(image, font, x, y, string, color)
//5 é o maior tamanho para fonte.

imagestring($image, 5, 80, 120, "CARLOS KLEI", $red);

//imagepng gera uma imagem png conforme especificado no header.
imagepng($image);
//Destruindo a variável da memória.
imagedestroy($image);
?>