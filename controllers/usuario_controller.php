<?php

function usuarioController(){
    echo "6. Controller recebeu a requisição.<br>";
    $usuarios = usuarioService();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "Usuários encontrados:<br>";
    foreach ($usuarios as $usuario) {
        echo "- " . $usuario . "<br>";
    }
}
