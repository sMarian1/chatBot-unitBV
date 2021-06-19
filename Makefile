install:
	sh ./scripts/install-composer.sh

install_botman:
	sh composer require "botman/installer" -w botman/driver-web symfony/cache
