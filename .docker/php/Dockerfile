FROM php:8.3.6-fpm

# エラー発生箇所がわかりやすいよう分割
# --no-install-recommends オプション
# https://qiita.com/YumaInaura/items/2cc1b64f875a36777f2d
RUN apt-get update
RUN apt-get install -y --no-install-recommends p7zip p7zip-full
RUN apt-get install -y --no-install-recommends zip
RUN apt-get install -y --no-install-recommends unzip
RUN apt-get install -y --no-install-recommends zlib1g-dev
RUN apt-get install -y --no-install-recommends libzip-dev
RUN docker-php-ext-install zip

# composerインストール

WORKDIR /app
RUN chmod 0777 -R /app
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
