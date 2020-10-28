<?php
require_once("Config.php");
echo "ID do usuário: "; 
echo session_id();
# Retorna o id da seção aberta pelo provedor... 
# Muito usado para identiicar quem está se logando no site por exemplo.
# Porém pode variar na mesma máquina ao ser acessado com navegadores diferentes.

#Antes é necessário inicializar a seção chamando Exemlplo01.php.