<?php

function produtoController(){
    echo "6. Controller recebeu a requisição.<br>";
    $produtos = produtoService();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "Produtos eletrônicos encontrados:<br>";
    foreach ($produtos as $produto) {
        echo "- {$produto['nome']} | {$produto['categoria']} | R$ " . number_format($produto['preco'], 2, ',', '.') . "<br>";
    }
}