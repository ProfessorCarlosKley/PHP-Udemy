<?php
$diaDaSemana = date("w");
/*w recupera dias da semana do objeto date. Varia de 0 a 6.*/
switch ($diaDaSemana) {
    case 0:
        echo "DOMINGO";
        break;
        //evita execução do segundo case, caso este seja verdadeiro.
    case 1:
        echo "SEGUNDA-FEIRA";
        break;
    case 2:
        echo "TERÇA-FEIRA";
        break;
    case 3:
        echo "QUARTA-FEIRA";
        break;
    case 4:
        echo "QUINTA-FEIRA";
        break;
    case 5:
        echo "SEXTA-FEIRA";
        break;
    case 6:
        echo "SÁBADO";
        break;
    default:
        echo "DATA INVÁLIDA";
    break; //Desnecessário.
}
