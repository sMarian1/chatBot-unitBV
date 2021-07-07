<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\SymfonyCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Attachments\Location;

foreach (glob("Conversations/*.php") as $filename) {
    require_once $filename;
}

$config = [];

DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

$adapter = new FilesystemAdapter();

$botman = BotManFactory::create($config, new SymfonyCache($adapter));

$botman->hears('.*(hi|hello|salut).*', function($bot) {
    
    $bot->startConversation(new OnboardingConversation);
    
});
$botman->fallback(function($bot) {
    
    $bot->reply('Imi pare rau dar nu am inteles mesajul tau, incearca alta formulare sau alta intrebare. Multumesc de intelegere!');
});
$botman->listen();