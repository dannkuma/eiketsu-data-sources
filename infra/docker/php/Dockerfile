FROM php:8.3-fpm-bullseye AS base

WORKDIR /workspace

# timezone environment
# システムロケール等を設定
# Laravel側のロケールは別途設定するので影響なし
ENV TZ=UTC \
  # locale
  LANG=en_US.UTF-8 \
  LANGUAGE=en_US:en \
  LC_ALL=en_US.UTF-8 \
  # composer environment
  COMPOSER_HOME=/composer

# 開発時のホストとクライアントのUID/GIDを指定
# これにより、ホスト側のファイルシステムへのアクセス権を適切に設定
ARG UID=1000
ARG GID=1000

# Composerをマルチステージビルドでインストール
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# hadolint ignore=DL3008
RUN <<EOF
  apt-get update
  apt-get -y install --no-install-recommends \
    locales \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    default-mysql-client \
    libmemcached-dev \
    zlib1g-dev
  locale-gen en_US.UTF-8
  localedef -f UTF-8 -i en_US en_US.UTF-8
  docker-php-ext-install \
    intl \
    pdo_mysql \
    zip \
    bcmath
  # install memcached extension
  pecl install memcached
  docker-php-ext-enable memcached
  #install nodejs
  curl -fsSL https://deb.nodesource.com/setup_22.x | bash -
  apt-get install -y nodejs
  corepack enable
  # install puppeteer
  libasound2 libatk-bridge2.0-0 libatk1.0-0 libc6 libcairo2 libcups2 \
  libdbus-1-3 libexpat1 libfontconfig1 libgbm1 libgcc1 libgconf-2-4 \
  libgdk-pixbuf2.0-0 libglib2.0-0 libgtk-3-0 libnspr4 libnss3 \
  libpango-1.0-0 libpangocairo-1.0-0 libstdc++6 libx11-6 libx11-xcb1 \
  libxcb1 libxcomposite1 libxcursor1 libxdamage1 libxext6 libxfixes3 \
  libxi6 libxrandr2 libxrender1 libxss1 libxtst6 \
  ca-certificates fonts-liberation lsb-release xdg-utils wget \
  nodejs gconf-service libappindicator1 libgbm-dev libxshmfence-dev \
  --no-install-recommends && rm -rf /var/lib/apt/lists/*
  # permission denied bind mount in Linux environment
  groupadd --gid $GID phper
  useradd --uid $UID --gid $GID phper
  mkdir /composer
  mkdir -p /home/phper/.config/psysh
  mkdir -p /home/phper/.npm
  chown phper:phper /composer
  chown phper:phper /workspace
  chown phper:phper /home/phper/.config/psysh
  chown -R phper:phper /home/phper/.npm
  apt-get clean
  rm -rf /var/lib/apt/lists/*
EOF

# Puppeteer をグローバルにインストールし、Chromium もダウンロード
ENV PUPPETEER_SKIP_DOWNLOAD=false
RUN npm install -g --unsafe-perm puppeteer

# Browsershot をインストール
# RUN composer require spatie/browsershot

FROM base AS development

COPY ./infra/docker/php/php.development.ini /usr/local/etc/php/php.ini

USER phper

FROM base AS development-xdebug

RUN <<EOF
  pecl install xdebug
  docker-php-ext-enable xdebug
EOF

COPY ./infra/docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

USER phper

FROM base AS deploy

COPY ./infra/docker/php/php.deploy.ini /usr/local/etc/php/php.ini
COPY --chown=phper:phper ./src /workspace

USER phper

RUN <<EOF
  composer install --quiet --no-interaction --no-ansi --no-dev --no-scripts --no-progress --prefer-dist
  composer dump-autoload --optimize
  chmod -R 777 storage bootstrap/cache
  php artisan optimize:clear
  php artisan optimize
EOF
