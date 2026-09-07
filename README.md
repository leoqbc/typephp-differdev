# TypePHP o que não te contaram!

1. Primeiro passo
```sh
# buildar a imagem
docker build . -t leoqbc/typephp-swoole:latest
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
tpc -O3 seu_script.php --build-dir build
```
