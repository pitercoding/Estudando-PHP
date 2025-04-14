<form method="post">
    <label>Digite um número para ver a tabuada:</label><br>
    <input type="number" name="numero" required><br><br>
    <input type="submit" value="Gerar Tabuada">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo "<h3>Tabuada do $numero:</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado <br>";
    }
}
?>

