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

$botman->hears('.*(inscriu|aplica).*.*multe.*.*facultati.*', function($bot) {
    
    $bot->startConversation(new MoreFaculties);
    
});
$botman->hears('.*(posibil|poate).*.*dep.*.*dosar.*', function($bot) {
    
    $bot->startConversation(new othersApply);
    
});
$botman->hears('.*multe.*.*(inscrie|înscrie).*.*facult.*', function($bot) {
    
    $bot->startConversation(new moreApplies);
    
});
$botman->hears('.*(inscriu|aplica).*.*acelasi.*.*(mail|email).*', function($bot) {
    
    $bot->startConversation(new sameEmail);
    
});
$botman->hears('.*(prima|ultima).*.*medie.*', function($bot) {
    
    $bot->startConversation(new gradesLastYear);
    
});
$botman->hears('.*unde.*.*(achit|platesc).*.*taxa.*', function($bot) {
    
    $bot->startConversation(new payTax);
    
});
$botman->hears('.*(admis|acceptat).*.*confirm.*.*loc.*', function($bot) {
    
    $bot->startConversation(new confirmPlace);
    
});
$botman->hears('.*(achit|plat).*.*prima.*.*(transa|taxa).*', function($bot) {
    $bot->typesAndWaits(3);
    $bot->startConversation(new firstPay);
    
});





























$botman->hears('.*(pciture|image|poza).*', function($bot) {

    $bot->reply('Locatia Aulei <a href="https://goo.gl/maps/2AuK3LygLsvDb3xK7" target="_blank">https://goo.gl/maps/2AuK3LygLsvDb3xK7</a>');
    
});
$botman->hears('.*(map).*', function($bot) {
    $attachment = new Location(61.766130, -6.822510, [
        'custom_payload' => true,
    ]);
    
    // Build message object
    $message = OutgoingMessage::create('This is my text')
                ->withAttachment($attachment);
    
    // Reply message object
    $bot->reply($message);
});
$botman->fallback(function($bot) {
    
    $bot->reply('Imi pare rau dar nu am inteles mesajul tau, incearca alta formulare sau alta intrebare. Multumesc de intelegere!');
});
$botman->listen();