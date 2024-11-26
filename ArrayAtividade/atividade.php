<?php
//lista
echo 'Frutas: '.'<br>';
$frutas = ["Melancia", "Banana", "Maçã", "Melão", "Uva"];

foreach ($frutas as $fruta) {
   echo 'Frutas:' .$fruta.'<br>';
}
echo '<br><br>';

// adicionando
echo 'Adicionada: '.'<br>';
$frutas[] = "Manga";

foreach ($frutas as $fruta) {
   echo 'Frutas:' .$fruta.'<br>';
}
echo '<br><br>';

// ordem alfabética
echo 'Ordem: '.'<br>';
sort($frutas);

foreach ($frutas as $fruta) {
   echo 'Frutas: ' .$fruta.'<br>';
}
echo '<br><br>';

// informações
$produto = [
   "nome" => "Uva".'<br>',
   "preco" => '4,50'.'<br>',
   "estoque" => '15'.'<br>'
];
echo 'Informações: '.'<br>';
foreach ($produto as $chave => $valor) {
   echo ucfirst($chave) . ": $valor";
}
echo '<br><br>';

// Atualização
$produto["preco"] = 8.99;
echo "Informações atualizadas: ".'<br>';
foreach ($produto as $chave => $valor) {
   echo ucfirst($chave) . ": $valor";
}
echo '<br><br>';

// Valor das unidades
$unidades = 6;
$valorTotal = $produto["preco"] * $unidades;
echo "Valor total de $unidades unidades: R$ $valorTotal";
echo '<br><br>';

// Associação
$nomes = ["Melancia", "Banana", "Maçã", "Melão", "Uva"];
$precos = [15.00.'<br>', 4.45.'<br>', 5.15.'<br>', 11.99.'<br>', 8.99];
$produtos = array_combine($nomes, $precos);
echo "Associando produtos e preços: ".'<br>';
foreach ($produtos as $nome => $preco) {
   echo "$nome: R$ $preco";
}
echo '<br><br><br><br>';

// Cor presente na lista
$cores = ["branco", "vinho", "vermelho", "cinza", "preto"];
$corProcurada = "branco";
if (in_array($corProcurada, $cores)) {
   echo "A cor \"$corProcurada\" está presente no array.";
} else {
   echo "A cor \"$corProcurada\" não foi encontrada no array.";
}
echo '<br><br>';

// Média e total dos números
$numeros = [22, 55, 99, 33, 77];
$soma = array_sum($numeros);
$media = $soma / count($numeros);
echo "Soma dos números: $soma";
echo "Média dos números: $media";
?>