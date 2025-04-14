<form method="post">
    Número 1: <input type="number" name="num1"><br>
    Número 2: <input type="number" name="num2"><br>
    <select name="operacao">
        <option value="+">Soma</option>
        <option value="-">Subtração</option>
        <option value="*">Multiplicação</option>
        <option value="/">Divisão</option>
    </select><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_POST) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['operacao'];

    switch ($op) {
        case '+': $res = $a + $b; break;
        case '-': $res = $a - $b; break;
        case '*': $res = $a * $b; break;
        case '/': $res = $b != 0 ? $a / $b : "Erro: divisão por zero"; break;
        default: $res = "Operação inválida";
    }

    echo "Resultado: $res";
}
?>
