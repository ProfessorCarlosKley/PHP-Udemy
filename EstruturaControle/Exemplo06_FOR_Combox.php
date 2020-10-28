<?php
echo "<select>";
//pegando intervalo de 100 anos a apartir do atual.
for ($i = date("Y"); $i >= date("Y") - 100; $i--) {

    echo '<option value="' . $i . '"> ' . $i . ' </option>';
}
echo "</select>";

//date("Y") retorna ano da data atual com 4 digititos, "y" retorna com dois.
