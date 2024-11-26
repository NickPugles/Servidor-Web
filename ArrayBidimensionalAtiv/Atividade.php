<?php
// 1)
$produtos = [
    '<br>'."calca jeans" => ["preco" => 150.00, "estoque" => 20],
    '<br>'."blusa" => ["preco" => 59.99, "estoque" => 50],
    '<br>'."tenis" => ["preco" => 552.23, "estoque" => 48],
    '<br>'."moletom" => ["preco" => 93.76, "estoque" => 87],
    ];
    echo '<br><br>';
    // Nome e o preço de todos os produtos
    echo "Produtos e seus preços: ".'<br>';
    foreach ($produtos as $nome => $informacoes) {
    echo "- $nome: R$ " . number_format($informacoes["preco"], 2, ",", ".") ." ";
}
echo '<br><br>';

    // 2)
    // Valor total em estoque
$valorTotalEstoque = 0;
foreach ($produtos as $nome => $informacoes) {
$valorTotalEstoque += $informacoes["preco"] * $informacoes["estoque"];
}
echo "Valor total em estoque de todos os produtos: R$ " . number_format($valorTotalEstoque, 2, ",", ".") . "";

    // 3)
    $alunos = array(
        array('<br>'.'nome' => 'Agatha', 'matematica' => 8.5, 'portugues' => 10),
        array('<br>'.'nome' => 'Theo', 'matematica' => 5, 'portugues' => 8),
        array('<br>'.'nome' => 'Helena', 'matematica' => 10, 'portugues' => 2)
    );
    echo '<br><br>';
    // Nome de cada aluno e suas notas
echo "Notas dos alunos: ".'<br>';
foreach ($alunos as $nome => $notas) {
   echo "Aluno: $nome".'<br>';
   foreach ($notas as $disciplina => $nota) {
       echo "- $disciplina: $nota".'<br>';
   }
}
echo '<br><br>';
// Média
echo "Médias dos alunos: ".'<br>';
foreach ($alunos as $nome => $notas) {
   '<br>'.$media = array_sum($notas) / count($notas);
   echo "- $nome: Média = ".number_format($media, 2, ",", ".").'<br>'. "";
}
?>