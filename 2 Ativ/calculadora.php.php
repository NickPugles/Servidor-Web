<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Calculadora</h1>

        <label>Primeiro Valor: </label>
        <input type="number" name="n1" id="primeiro valor" required="required"><br>

        <label>Segundo Valor: </label>
        <input type="number" name="n2" id="segundo valor" required="required"><br><br>

        <label>Operação: </label>
        <select name="operacao" required="required">
            <option value="">Selecionar...</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
            <option value="subtracao">-</option>
            <option value="adicao">+</option>
        </select>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form> 

<?php
if($_SERVER['PHP_SELF'] == "POST"){
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $operacao = $_POST["operacao"];
    $resultado = nul;
    switch ($operacao){
        case "adicao":
            $resultado = $n1 + $n2;
            break;
        case "subtracao":
            $resultado = $n1 - $n2;
            if ($resultado <=0){
                echo "<p>Resultado Inexistente</p>";
                exit;
            }
            break;
            case "multiplicacao":
                $resultado = $n1 * $n2;
                break;
        case "divisao":
            if (n2 == 0){
                echo "<p>Divisão Inexistente</p>";
                exit;
            }
            $resultado = $n1 / $n2;
            break;
        default:
            echo "<p> Operação inválida</p>";
            exit;
        }
        if ($resultado !== null && $resultado >= 0) {
            echo "<p>Resultado: $resultado</p>";
    }
}
?>
</body>
</html>