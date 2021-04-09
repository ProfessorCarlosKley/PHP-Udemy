<form>
    <!-- form: Como não colcamos action o padrão é a própria pasta.
               Como não colocamos método o padrão é GET.-->
    <input type="text" name="Evento">
    <input type="date" name="Data">
    <input type="submit" value="OK">
    </input>
</form>

<?php
if (isset($_GET)) {
    /*verificando existência da variável global.
    Necessário, pois o GET só existirá após clique no botão submit. Antes dará erro de não definido.
    */
    foreach ($_GET as $key => $value) {
        # o $key do GET é o nome dos campos 'name'.
        # o que foi digitado nos campos é obtido pelo $value
        # Os nomes key e value podemos alterar o importante é a estrutura de foreach.
        # Lembrando que GET é o array global que contém os valores dos campos do form.
        # Quando um form é submeitido o nome do fomrm vai para url que é capturado pelo GET.
        echo "Nome do campo: " . $key;
        echo "<hr>";
        echo "Valor do campo: " . $value;
        echo "<hr>";
    }
}
?>