<form>
    <input type="text" name="Evento">
    <input type="date" name="Data">
    <input type="submit" value="OK">
    </input>
</form>

<?php
if (isset($_GET)) { //verificando existência da variável global.
    foreach ($_GET as $key => $value) {
        # o $key do GET é o nome dos campos 'name'.
        # o que foi digitado nos campos é obtido pelo $value
        # Esses nomes de variáveis podemos alterar o importante é a estrutura de foreach.
        # Lembrando que GET é a global que contem o arre do form submetido.
        # Quando um form é submeitido o nome do fomr vai para url que é capturado pelo GET.
        echo "Nome do campo: " . $key;
        echo "<hr>";
        echo "Valor do campo: " . $value;
        echo "<hr>";
    }
}
?>