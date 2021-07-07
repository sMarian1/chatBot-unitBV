.PHONY: install botman copy-files action
action:
    echo argument
install:
	sh ./scripts/install-composer.sh
botman:
	composer require "botman/installer" -w botman/driver-web symfony/cache --working-dir=<PATH to APP>
copy-files:
	cp -r botmanTemplate --working-dir=<PATH to APP>