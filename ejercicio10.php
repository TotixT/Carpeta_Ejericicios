<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        <label for="numero">Ingrese un Numero:</label>
        <input type="number" name="numero">
        <input type="submit" name="ejecutar" value="Agregar Numero"><br><br>
        <label > Mostrar resultados de numeros enviados</label>
		<input type="submit" name="ejecutar" value="Mostrar resultados"><br><br>
    </form>
    <?php
        session_start();
        if(isset($_POST["ejecutar"])){

        }
    ?>
</body>
</html>