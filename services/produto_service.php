<?php

function produtoService(){
    echo "7. Service está executando a regra de negócio.<br>";

    return [
        [
            "nome" => "Notebook Pro 15",
            "categoria" => "Informática",
            "preco" => 4299.90
        ],
        [
            "nome" => "Smartphone Vision X",
            "categoria" => "Celulares",
            "preco" => 2499.00
        ],
        [
            "nome" => "Fone Bluetooth AirSound",
            "categoria" => "Áudio",
            "preco" => 349.90
        ]
    ];
}