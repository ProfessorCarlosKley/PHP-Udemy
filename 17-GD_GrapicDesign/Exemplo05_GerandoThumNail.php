<?php 
//GERANDO THUMBNAIL

header ("Content-type: image/jpeg");
$file = "wallpaper.jpg";
//Definindo nova largura e nova altura.
$new_Width = 256; //px
$new_Hight = 256; 

//getimagesize coleta informações de comprimento e largura da imagem original.
//Lembrando que essas infromações vêm de um array.
// Se usarmos var_dump(getimagesize($file)), obteremos um array com todas as informações da imagem, inclusive suas dimensões nos índices 0 e 1.

/*
$data = getimagesize($file);
$width = $data[0];
$height = $data[1];

Essas instruções foram substituídas por list, que retorna a mesma coisa.
list nas ordem dos parâmetros correspondem à largura e altura da imagem no array.
*/

//obtendo as medidas antigas da imagem com list e getimagesize.
//getimagesize ler as dimensoes da imagem e armazena no array list.
list($old_width, $old_height) = getimagesize($file);

#Usa a paleta trueColor de 16 milhões de cores e cria a imagem com novo tamanho.
$new_image = imagecreatetruecolor($new_Width, $new_Hight);
#Criando uma imagem a partir da imagem antigo (original)
$old_image = imagecreatefromjpeg($file);
#Juntando as duas imagens e formando thumbnail com
#imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
//1) imagem nova. 2) A imagem de origem.
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_Width, $new_Hight, $old_width, $old_height);

imagejpeg($new_image);
imagedestroy($new_image);
imagedestroy($old_image);

 ?>