<?php 


$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
#No RGB toda vez que repetimos valores que não são 0 ou 255, temos um tom de cinza.
//imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
//TORCADO imagestring para trabalharmos com as fontes ttf da pasta.

//imagettftext(image, size, angle, x, y, color, fontfile, text).

imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR.
	"Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR.
	"Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Carlos Klei");

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);//utf8 para usar padrão utf no texto.

#imagejpeg, colocando parâmetros, ele cria o arquivo jpg na pasta com o nome escolhido. Dessa forma, não aparece visualmente no browser.
#Depois do nome, informamos a qualidade, que varia de 0-100. Varia a qualidade e cnsequentemente o tamanho do arquivo.

header("Content-type: image/jpeg");

imagejpeg($image);//dessa forma não salvamos, jogamos na tela.
imagedestroy($image);
 ?>