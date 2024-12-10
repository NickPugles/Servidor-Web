<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <label>Resultado: </label>
    </form> 
    <?php
    function adicao ($n1,$n2){
        return $n1 + $n2;
    }
    function subtracao ($n1,$n2){
        return $n1 - $n2;
    }
    function multiplicacao ($n1, $n2){
        return $n1 * $n2;
    }
    function divisao ($n1,$n2){
        if ($n2 == 0)
        echo "<p> Divisão Inválida"
        return $n1 / $n2;
    }

    
    ?>
</body>
</html>