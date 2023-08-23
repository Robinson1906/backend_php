<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Básica</title>
</head>
<body>
    <h1>Calculadora Básica</h1>
    <form method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br>
        
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br>
        
        <label for="operacion">Operación:</label>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];
        $resultado = 0;

        if ($operacion == "suma") {
            $resultado = $numero1 + $numero2;
        } elseif ($operacion == "resta") {
            $resultado = $numero1 - $numero2;
        } elseif ($operacion == "multiplicacion") {
            $resultado = $numero1 * $numero2;
        } elseif ($operacion == "division") {
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                echo "<p>No se puede dividir por cero.</p>";
            }
        }

        echo "<p>Resultado: $resultado</p>";
    }
    ?>
</body>
</html>
