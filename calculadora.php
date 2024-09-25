<?php
function calcular($num1, $num2, $operacion)
{
    $resultado = 0;

    switch ($operacion) {
        case 'multiplicar':
            $resultado = $num1 * $num2;
            break;
        case 'dividir':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error, no podemos dividir entre 0!!!";
            }
            break;
        default:
            $resultado = "No se puede realizar esta operación";
            break;
    }

    return $resultado;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    // Llamamos a la función calcular
    $resultado = calcular($num1, $num2, $operacion);

    // Redirigimos de nuevo a la página de la calculadora con el resultado que hemos obtenido
    header("Location: index.php?resultado=" . urlencode($resultado));
    exit();

    /*función header() de PHP para enviar una cabecera HTTP al navegador, que en este caso es una redirección (a través del código Location)
    Redirige al usuario a la página index.php con el parámetro resultado en la URL, es decir, index.php?resultado=valor
    urlencode($resultado) se asegura de que el valor de $resultado sea codificado de forma segura para la URL (por ejemplo, si hay espacios u otros caracteres especiales)
    Después de redirigir, el script PHP se detiene inmediatamente gracias a la función exit();, asegurándose de que no se ejecute ningún código adicional después de la redirección
    */
}
