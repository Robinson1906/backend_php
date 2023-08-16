
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite la siguiente info</h1>
    <form action="03_metodo_get.php" method="get">
        nombre :
        <input type="text" name="nombre"/>
        <br>
        fecha:
        <input type="date" name="fecha" id=""/>
        <br>
        observacion:
        <input type="text" name="obs"/>
        <br>
        <input type="submit" name="enviar"/>
   
     
    </form>
    <h2>Informacion Envida es: </h2>
    <?php
    print_r($_GET);
?>
</body>
</html>