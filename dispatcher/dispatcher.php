<?php

function dispatcher($rota)(
  echo "5. Dispatcher deicidu qual controller deve executar.<br>";
  if ($rota === "/usuários") {
      usuarioController();
  }
}
