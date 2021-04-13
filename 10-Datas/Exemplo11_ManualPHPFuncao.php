<?php
$inicial = new DateTime('1976-11-13');
$atual = new DateTime('2020-10-31');
$interval = $inicial->diff($atual);

function getTotalInterval($interval, $type){
    switch($type){
        case 'ano':
            return $interval->format('%Y');
            break;
        case 'mês':
            $years = $interval->format('%Y');
            $months = 0;
            if($years){
                $months += $years*12;
            }
            $months += $interval->format('%m');
            return $months;
            break;
        case 'dias':
            return $interval->format('%a');
            break;
        case 'hours':
            $days = $interval->format('%a');
            $hours = 0;
            if($days){
                $hours += 24 * $days;
            }
            $hours += $interval->format('%H');
            return $hours;
            break;
        case 'minutos':
            $days = $interval->format('%a');
            $minutes = 0;
            if($days){
                $minutes += 24 * 60 * $days;
            }
            $hours = $interval->format('%H');
            if($hours){
                $minutes += 60 * $hours;
            }
            $minutes += $interval->format('%i');
            return $minutes;
            break;
        case 'segundos':
            $days = $interval->format('%a');
            $seconds = 0;
            if($days){
                $seconds += 24 * 60 * 60 * $days;
            }
            $hours = $interval->format('%H');
            if($hours){
                $seconds += 60 * 60 * $hours;
            }
            $minutes = $interval->format('%i');
            if($minutes){
                $seconds += 60 * $minutes;
            }
            $seconds += $interval->format('%s');
            return $seconds;
            break;
        case 'millisegundos':
            $days = $interval->format('%a');
            $seconds = 0;
            if($days){
                $seconds += 24 * 60 * 60 * $days;
            }
            $hours = $interval->format('%H');
            if($hours){
                $seconds += 60 * 60 * $hours;
            }
            $minutes = $interval->format('%i');
            if($minutes){
                $seconds += 60 * $minutes;
            }
            $seconds += $interval->format('%s');
            $milliseconds = $seconds * 1000;
            return $milliseconds;
            break;
        default:
            return NULL;
    }
}

$linha = str_repeat("=", 150);

echo $linha;
echo "<br>";
echo "EXIBINDO MINHA IDADE";
echo "<br>";
echo $linha;
echo "<br>";
echo "<br>";

echo getTotalInterval($interval, 'ano') . " anos.";
echo "<br>";
echo getTotalInterval($interval, 'mês') . " meses.";
echo "<br>";
echo getTotalInterval($interval, 'dias') . " dias.";
echo "<br>";
echo getTotalInterval($interval, 'minutos') . " minutos.";
echo "<br>";
echo getTotalInterval($interval, 'segundos') . " segundos.";
echo "<br>";
echo getTotalInterval($interval, 'millisegundos') . " millisegundos.";
?>

