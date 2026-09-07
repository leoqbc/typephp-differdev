# TypePHP o que não te contaram!

1. Primeiro passo
```sh
docker compose up -d
```

1. Entrando no container
```sh
docker compose exec typephp bash
```

3. Compilando um arquivo
```sh
# basico
tpc seu_arquivo.php

# com performance e saída de arquivo
tpc -O3 --build-dir ./build maim.php
```