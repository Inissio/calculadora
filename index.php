<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animarte</title>
</head>
<body>
    <form action="controlador/form.php" method="post">
        <label> Valor 1 </label>
        <input type="text" name="val1"><br><br>
        <label> Valor 2</label>
        <input type="text" name="val2"><br><br>
        <select name="opcion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select> <br><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>