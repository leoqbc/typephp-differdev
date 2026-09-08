# TypePHP o que não te contaram!

1. Primeiro passo
```sh
# buildar a imagem de teste

# No linux amd64
docker build . -t leoqbc/typephp-swoole:latest

# No Mac arm64 com OrbStack
docker build . --platform linux/amd64 -t leoqbc/typephp-swoole:latest

# Inicializamos o container
docker compose up -d
```

1. Entrando no container
```sh
docker compose exec typephp bash
```

3. Compilando um arquivo
```sh
# basico
tpc seu_arquivo.php -o bin/seu_arquivo

# com performance e saída de arquivo
tpc -O3 seu_script.php -o bin/seu_script --build-dir build
```
