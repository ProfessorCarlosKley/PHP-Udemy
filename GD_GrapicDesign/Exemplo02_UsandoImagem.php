<?php 

$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
#No RGB toda vez que repetimos valores que não são 0 ou 255, temos um tom de cinza.
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "CARLOS KLEI C. DE MOURA", $titleColor);
imagestring($image, 5, 440, 370, utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);//utf8 para usar padrão utf no texto.
//Executando:
header("Content-type: image/jpeg");
#imagejpeg, colocando parâmetros, ele cria o arquivo jpg na pasta com o nome escolhido. Dessa forma, não aparece visualmente no browser.
#Depois do nome, informamos a qualidade, que varia de 0-100. Varia a qualidade e cnsequentemente o tamanho do arquivo.
imagejpeg($image, "Certificado".date("Y-m-d").".jpg", 100);
imagedestroy($image);
 ?>