<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Sueldo</title>
</head>
<body>
    <form method="get" action="calculadora.php">
        <label for="total_vendido">Total vendido:</label>
        <input type="text" name="total_vendido" id="total_vendido" required>
        <br>
        <label for="cant_hijos">Cantidad de hijos:</label>
        <input type="text" name="cant_hijos" id="cant_hijos" required>
        <br>
        <label for="sueldo_basico">Sueldo basico:</label>
        <input type="text" name="sueldo_basico" id="sueldo_basico" required>
        <br>
        <input type="submit" value="Calcular Sueldo">
    </form>
</body>
</html>
