.PHONY:
#install php and composer
install:
	sh ./scripts/install-composer.sh
#install botman in your project, don't forget to update the working directory to match your project path
botman:
	composer require "botman/installer" -w botman/driver-web symfony/cache --working-dir=/mnt/c/Users/Stefan/Desktop/testApp/src/
#will make a copy of files needed to add the chatbot to your page
#don't forget to read the readMe file, will show you what you need to add in your index file
copy-files:
	cp -r botmanTemplate/* /mnt/c/Users/Stefan/Desktop/testApp/src/

#path for my testApp: /mnt/c/Users/Stefan/Desktop/testApp/src/