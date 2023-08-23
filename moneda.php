<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Moneda</title>
</head>
<body>
    <h1>Conversor de Moneda</h1>
    <form method="post">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" step="0.01" required><br>
        
        <label for="moneda">Moneda:</label>
        <select name="moneda">
            <option value="euro">Euro</option>
            <option value="dolar">Dólar</option>
            <option value="rupia">Rupia</option>
        </select><br>
        
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $moneda = $_POST["moneda"];
        $conversion = 0;
        $moneda_nombre = '';

        if ($moneda == "euro") {
            $conversion = $cantidad * 4429.34;
            $moneda_nombre = 'pesos';
        } elseif ($moneda == "dolar") {
            $conversion = $cantidad * 4063.06;
            $moneda_nombre = 'pesos';
        } elseif ($moneda == "rupia") {
            $conversion = $cantidad * 83.09;
            $moneda_nombre = 'pesos';
        }

        echo "<p>$cantidad $moneda equivale a $conversion $moneda_nombre.</p>";
    }
    ?>
</body>
</html>
