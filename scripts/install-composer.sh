#!/bin/sh

if ! which composer > /dev/null; then
    echo "Update package manager"
    apt-get update
    echo "Install php and dependencies"
    apt install curl php-cli php-mbstring git unzip php7.4-zip -y
    echo "Download composer"
    cd ~
    curl -sS https://getcomposer.org/installer -o composer-setup.php
    echo "Install composer"
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer
    echo "Verify composer installed"
    php /usr/local/bin/composer
    composer --version
    rm composer-setup.php
fi