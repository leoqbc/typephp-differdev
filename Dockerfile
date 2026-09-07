FROM tinywan/typephp-linux-x64

RUN curl -fL --output /tmp/pie.phar https://github.com/php/pie/releases/latest/download/pie.phar \
      && mv /tmp/pie.phar /usr/local/bin/pie \
      && chmod +x /usr/local/bin/pie

RUN pie install swoole/swoole

