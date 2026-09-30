<?php

function router(){
    echo "2. Router está analisando a URL.<br>";
    $rota = "/produtos";
    $parametro = "categoria=eletronicos";
    middleware($rota);
}
