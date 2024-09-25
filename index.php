<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="calculator-container">
        <h1>Calculadora Básica</h1> <!-- Formulario que envía los datos a calculadora.php -->
        <form action="calculadora.php" method="POST">
            <!-- Campo para meter el primer número -->
            <input type="number" name="num1" placeholder="Número 1" required>
            <!-- Campo para meter el segundo número -->
            <input type="number" name="num2" placeholder="Número 2" required>
            <!-- Botones para elegir la operación -->
            <div class="buttons">
                <button type="submit" name="operacion" value="sumar">Sumar</button>
                <button type="submit" name="operacion" value="restar">Restar</button>
                <button type="submit" name="operacion" value="multiplicar">Multiplicar</button>
                <button type="submit" name="operacion" value="dividir">Dividir</button>
            </div>
        </form>

        <!-- Campo donde aparecerá el resultado, mostramos el resultado si lo devuelve calculadora.php -->
        <div class="result">
            <h2>Resultado:
                <?php
                // Mostrar el resultado si está disponible en la URL
                if (isset($_GET['resultado'])) {
                    $resultado = $_GET['resultado'];
                    echo "<h2>$resultado</h2>";
                }
                ?>
            </h2>
        </div>
    </div>
</body>

</html>