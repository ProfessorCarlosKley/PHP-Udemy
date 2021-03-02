<?php 
//GERANDO THUMBNAIL

header ("Content-type: image/jpeg");
$file = "wallpaper.jpg";
$new_Width = 256; //px
$new_Hight = 256; 

//Coletando informações de comprimento e largura da imagem original.
//Lembrando que essas infromações vêm de um array. Se usarmos
//var_dump(getimagesize($file)); obteremos um array com informações da imagem.

/*
$data = getimagesize($file);
$width = $data[0]; 
$height = $data[1];

Essas instruções foram substituídas por list, que retorna a mesma coisa.
list nas ordem dos parâmetros correspondem à largura e altura da imagem no array.
*/

list($old_width, $old_height) = getimagesize($file);
#Usa a paleta trueColor de 16 milhões de cores.
$new_image = imagecreatetruecolor($new_Width, $new_Hight);
$old_image = imagecreatefromjpeg($file);
#Juntando as duas imagens e formando thumbnail com
#imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_Width, $new_Hight, $old_width, $old_height);

imagejpeg($new_image);
imagedestroy($new_image);
imagedestroy($old_image);

 ?>